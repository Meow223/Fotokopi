<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\User;
use App\Models\Keranjang;
use Auth;
use Alert;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$pesanans = Pesanan::where('user_id', Auth::user()->id)->where('status', '!=',0)->get();

    	return view('history', compact('pesanans'));
    }

    public function detail($id)
    {
    	$pesanan = Pesanan::where('id', $id)->first();
    	$pesanan_details = Keranjang::where('id_pesanan', $pesanan->id)->get();

     	return view('detail', compact('pesanan','pesanan_details'));
    }
}