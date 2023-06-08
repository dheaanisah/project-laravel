<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class StokController extends Controller
{
    public function index(){
        $stok = Stok::get();
        return view('stok.index', ['barang'=>$stok]);
    }

    public function create(){
        return view('stok.tambah');
    }

    public function store(Request $request){
        $data = [
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'kategori_barang' => $request->kategori_barang,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah
        ];

        Stok::create($data);

        return redirect()->route('stok');
    }

    public function edit($id){
        $stok = Stok::find($id)->first();

        return view('stok.tambah', ['stok'=>$stok]);
    }

    public function update($id, Request $request){
        $data = [
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'kategori_barang' => $request->kategori_barang,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah
        ];

        Stok::find($id)->update($data);
        return redirect()->route('stok');
    }

    public function delete($id){
        Stok::find($id)->delete();
        return redirect()->route('stok');
    }
}
