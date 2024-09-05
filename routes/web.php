<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', function () {
//     return view('login');
// })->name('login');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::get('/',function () {
//     return view('optionlogin');
// });

Route::get('/', [UserController::class, 'login']);
// Route::get('/loginuser', [UserController::class, 'loginuser']);
// Route::get('/login', [UserController::class, 'optionlogin']);
Route::get('/logout', [UserController::class, 'logout']);
Route::post('/auth', [UserController::class, 'auth']);
// Route::post('/authuser', [UserController::class, 'authuser']);
// Route::get('/index', [ProdukController::class, 'index']);
Route::get('/index', [UserController::class, 'showindex']);
Route::get('/detailproduk/{id}', [UserController::class, 'detailproduk']);
Route::post('/keranjang/{produk:id}', [KeranjangController::class, 'addchart'])->name('cart.add');
Route::get('/keranjang', [UserController::class, 'keranjang']);
Route::get('/checkout', [UserController::class, 'checkout']);
Route::get('/transaksi/{id}', [UserController::class, 'transaksi']);
Route::get('/keranjang', [KeranjangController::class, 'show']);

// Route::middleware('statusLogin')->group(function() {
    Route::get('/produk', [ProdukController::class, 'show']);
    Route::post('/search', [ProdukController::class, 'search']);
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/create', [ProdukController::class, 'add']);
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
    Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
    Route::get('/produk/delete/{id}', [ProdukController::class, 'delete']);
    Route::get('/kategori', [UserController::class, 'kategori']);
    Route::get('/home', [UserController::class, 'index']);

    Route::get('/user', [UserController::class, 'show']);
    Route::post('/search', [UserController::class, 'search']);
    Route::get('/user/create', [UserController::class, 'create']);
    Route::post('/user/create', [UserController::class, 'add']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/user/update/{id}', [UserController::class, 'update']);
    Route::get('/user/delete/{id}', [UserController::class, 'delete']);
// });


