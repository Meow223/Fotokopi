<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\User;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use Auth;
use Alert;
use Carbon\Carbon;

class PesananController extends Controller
{
    public function index($id)
    {
        //menampilkan barang
        $barang = Barang::where('id', $id)->first();
        return view('pesanan', compact('barang'));
    }
    public function pesan(Request $request, $id)
    {
        $barang = Barang::where('id', $id)->first();
        $tanggal = Carbon::now();

        // Validasi apakah melebihi stok
        if ($request->jumlah_pesan > $barang->stok) {
            return redirect('pesanan/' . $id);
        }

        // Cek validasi
        $cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

        // Simpan ke database pesanan
        if (empty($cek_pesanan)) {
            $pesanan = new Pesanan;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal_pesanan = $tanggal;
            $pesanan->status = 0;
            $pesanan->jumlah_harga = 0;
            $pesanan->kode = mt_rand(100, 999);
            $pesanan->save();
        }

        // Simpan ke database pesanan detail
        $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan_detail = Keranjang::where('id_barang', $barang->id)->where('id_pesanan', $pesanan_baru->id)->first();

        if (empty($pesanan_detail)) {
            $pesanan_detail = new Keranjang;
            $pesanan_detail->id_barang = $barang->id;
            $pesanan_detail->id_pesanan = $pesanan_baru->id;
            $pesanan_detail->jumlah = $request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $barang->harga_satuan * $request->jumlah_pesan;
            $pesanan_detail->save();
        } else {
            $pesanan_detail->jumlah += $request->jumlah_pesan;

            // Harga sekarang
            $harga_pesanan_detail_baru = $barang->harga_satuan * $request->jumlah_pesan;
            $pesanan_detail->jumlah_harga += $harga_pesanan_detail_baru;
            $pesanan_detail->update();
        }

        // Kurangi stok pada barang
        $barang->stok -= $request->jumlah_pesan;
        $barang->save();

        // Jumlah total
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan->jumlah_harga += $barang->harga_satuan * $request->jumlah_pesan;
        $pesanan->update();

        return redirect('check-out');
    }

    public function check_out()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan_details = [];
        if (!empty($pesanan)) {
            $pesanan_details = Keranjang::where('id_pesanan', $pesanan->id)->get();

        }

        return view('check_out', compact('pesanan', 'pesanan_details'));
    }

    public function delete($id)
    {
        $pesanan_detail = Keranjang::where('id', $id)->first();

        $pesanan = Pesanan::where('id', $pesanan_detail->id_pesanan)->first();
        $pesanan->jumlah_harga -= $pesanan_detail->jumlah_harga;
        $pesanan->update();

        // Memabah Stok ketika Dihapus
        $barang = Barang::where('id', $pesanan_detail->id_barang)->first();
        $barang->stok += $pesanan_detail->jumlah;
        $barang->save();

        $pesanan_detail->delete();

        return redirect('check-out');
    }

    public function konfirmasi()
    {
        $user = User::where('id', Auth::user()->id)->first();

        if (empty($user->alamat)) {
            return redirect('profile');
        }

        if (empty($user->notelp)) {

            return redirect('profile');
        }

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->update();

        $pesanan_details = Keranjang::where('id_pesanan', $pesanan_id)->get();
        foreach ($pesanan_details as $pesanan_detail) {
            $barang = Barang::where('id', $pesanan_detail->id_barang)->first();
            $barang->stok = $barang->stok - $pesanan_detail->jumlah;
            $barang->update();
        }



        return redirect('history/' . $pesanan_id);

    }


}