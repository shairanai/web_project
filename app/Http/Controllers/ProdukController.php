<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function show(){
        
        $data['produk'] = Produk::orderby('nama_produk', 'asc')->get();
        $data['total'] = Produk::count();
        return view('/produk', $data);
    }

    function index(){
        return view('/index');
    }

    public function search(Request $request){
        $data['produk'] = Produk::where('nama_produk', $request->cari)->get();
        $data['total'] = $data['produk']->count();

        return view('/index', $data);
    }

    public function create(){
        return view('produk-create');
    }

    public function add(Request $request){
        $validatedata = $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'foto' => 'image'
        ]); 

        $fileName = '';
        if ($request->file('foto')) {
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." .$extfile;
            $request->file('foto')->storeAs('foto', $fileName);
        }

        $produk = Produk::create([
            'nama_produk' => $request->nama_produk,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'foto' => $fileName
        ]);

        if ($produk) {
            Session::flash('pesan', 'Data berhasil ditambahkan');

        }else{
            Session::flash('pesan', 'Data gagal ditambahkan');
        }

        return redirect('index');
    }

    public function delete(Request $request){
        $produk = Produk::find($request->id);
        $delete = Produk::where('id', $request->id)->delete();
        if ($delete) {
            if ($produk->foto){
                Storage::delete('foto/'.$produk->foto);
            }
            Session::flash('pesan', 'Data berhasil dihapus');
        } else {
            Session::flash('pesan', 'Data gagal dihapus');
        }

        return redirect('index');
    }

    public function edit(Request $request){
        $data['produk'] = Produk::find($request->id);
        return view('/produk-edit', $data);
    }

    public function update(Request $request){

        $fileName = '';
        if ($request->file('foto')) {
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." .$extfile;
            $request->file('foto')->storeAs('foto', $fileName);
        }

        $update = Produk::where('id', $request->id)->update([
            'nama_produk' => $request->nama_produk,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'foto' => $fileName
        ]);

        if($update) {
            Session::flash('pesan', 'Data berhasil diubah');

        }else{
            Session::flash('pesan', 'Data gagal diubah');
        }

        return redirect('index');
    }
}