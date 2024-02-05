<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $data = Produk::all();
        return view('produk.index', compact('data'));
    }

    public function tambah(){
        return view('produk.tambah');
    }

    public function create(Request $request){
        Produk::create($request->all());
        return redirect()->route('home_produk');
    }
}
