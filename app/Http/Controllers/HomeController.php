<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class HomeController extends Controller
{
    public function type()
    {
        $usertype = Auth()->user()->usertype;

        if ($usertype == 'user') {
            $barang = Barang::paginate(20);
            return view('dashboard', compact('barang'));
        } elseif ($usertype == 'admin') {
            $barang = Barang::paginate(5);
            return view('barang', compact('barang'));
        } else {
            return redirect()->back();
        }
    }



    /*public function index(Request $request)
    {
        $barang = Barang::paginate(20);
        return view('dashboard', compact('barang'));
    }*/

    public function katalog(Request $request)
    {
        if ($request->has('search')) {
            $barang = Barang::where('nama_barang', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $barang = Barang::paginate(5);
        }

        return view('katalog', ['barang' => $barang]);
        /*$barang = Barang::paginate(20);
        return view('katalog', compact('barang'));*/
    }
    public function test(Request $request)
    {
        return view('test');
    }
}