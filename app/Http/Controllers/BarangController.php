<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $barang = Barang::where('nama_barang', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $barang = Barang::paginate(5);
        }


        return view('barang', ['barang' => $barang]);
    }

    public function tambah()
    {
        return view('tambahbarang');
    }

    public function insert(Request $request)
    {
        $barang = Barang::create($request->all());
        if ($request->hasFile('gambar_barang')) {
            $request->file('gambar_barang')->move('image/', $request->file('gambar_barang')->getClientOriginalName());
            $barang->gambar_barang = $request->file('gambar_barang')->getClientOriginalName();
            $barang->save();
        }

        return redirect()->route('barang')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampil($id)
    {
        $barang = Barang::find($id);
        return view('updatebarang', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang->update($request->all());
        return redirect()->route('barang')->with('Berhasil', 'Data berhasil diperbarui');
    }

    public function delete($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect()->route('barang')->with('Berhasil', 'Data berhasil dihapus');
    }
}