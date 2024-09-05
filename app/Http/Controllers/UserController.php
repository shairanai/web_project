<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function login(){
       return view(view: '/login'); 
    }

    // public function loginuser(){
    //     return view(view: 'loginuser'); 
    //  }

    //  public function authuser(Request $request){
    //     $validasi = $request->validate(rules:[
    //         'email' => 'required',
    //         'password' => 'required'
    //     ]);

    //     if (Auth::attempt($validasi)) {
    //         return redirect('/home');
    //     } else {
    //         return back()->withErrors([
    //             'email' => 'maaf, email anda salah',
    //         ]);
    //     }
        
    //     return redirect()->back()->with('pesan', 'mohon maaf login anda gagal');
    // }

    // public function optionlogin(){
    //     return view('login');
    // }

    

    public function auth(Request $request){
        $validasi = $request->validate(rules:[
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($validasi)) {
            return redirect('/index');
        } else {
            return back()->withErrors([
                'email' => 'maaf, email anda salah',
            ]);
        }
        
        return redirect()->back()->with('pesan', 'mohon maaf login anda gagal');
    }


    function logout(){
        Auth::logout();
        return redirect('/login');
    }

    function show(){
        return redirect('/produk');
    }
    
    public function index(){
        $data['produk'] = Produk::all();
        return view('/home',$data);
    }

    public function showindex(){
        $data['produk'] = Produk::all();
        $data['total'] = $data['produk']->count();
        return view('/index', $data);
    }

    public function search(Request $request){
        $data['produk'] = Produk::where('nama_produk', $request->cari)->get();
        $data['total'] = $data['produk']->count();

        return view('/index', $data);
    }

    public function kategori(){
        return view('/kategori');
    }

    public function detailproduk($id){
        $data['produk'] = Produk::where('id', $id)->first();
        return view('/detailproduk', $data);
    }

    public function keranjang(){
        return view('/keranjang');
    }

    public function checkout(){
        return view('/checkout');
    }
    
    function showproduk(){
        $data['produk'] = Produk::all();
        $data['keranjang'] = Keranjang::all();
        return view('/keranjang', $data);
    }

    // function search(Request $request){
    //     $data['produk'] = Produk::where('nama_produk', 'LIKE', '%'.$request->cari.'%')->orWhere('kategori', 'LIKE', '%'.$request->cari.'%')->get();
    //     $data['keranjang'] = Keranjang::all();
    //     return view('/search',$data);
    // }
}
