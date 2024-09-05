<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    function addchart(Produk $produk){
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu');
        }

        Keranjang::create([
            'user_id' => auth()->user()->id,
            'produk_id' => $produk->id,
            'quantity' => 1
        ]);

        return redirect()->back()->with('Sukses', 'Produk berhasil di tambah ke keranjang');
    }

    function delete(Request $request){
        $delete = Keranjang::find($request);
        $keranjang = Keranjang::where('id', $request->id)->delete();
        if($keranjang) {
            return redirect()->back()->with('Sukses', 'Produk berhasil di hapus dari keranjang');
        }else{
            return redirect()->back()->with('Gagal', 'Produk gagal di hapus dari keranjang');
        }  
    }

    function show(){
        $data['produk'] = Produk::all();
        $data['keranjang'] = Keranjang::all();
        return view('/keranjang', $data);
    }
}
