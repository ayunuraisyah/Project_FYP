<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RifadController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\itemsPostController;
use App\Http\Controllers\ReaditemController;


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
//     return view('welcome');
// });

Route::get('/', [RifadController::class, 'home']);

Route::get('/kategori', [RifadController::class, 'kategori']);

Route::get('/profil', [RifadController::class, 'profil']);

Route::get('/adminproduk', [RifadController::class, 'adminproduk']);

Route::get('/beliProduk', [RifadController::class, 'beliProduk']);

Route::get('/test', [RifadController::class, 'test']);

Route::get('/statuspembelian', [RifadController::class, 'statuspembelian']);

Route::get('/profil2', [RifadController::class, 'profil2']);

Route::get('/keranjang', [RifadController::class, 'keranjang']);

Route::get('/keranjang2', [RifadController::class, 'keranjang2']);

Route::get('/detailProduk', [RifadController::class, 'detailProduk']);

Route::get('/registrasi', [RegisterController::class, 'index']);
Route::post('/registrasi', [RegisterController::class, 'create']);

Route::resource('/admin', itemsPostController::class)->middleware('auth');
Route::get('/adminBarang', [ReaditemController::class,'view'])->middleware('auth');

Route::get('/menupage', [ReaditemController::class,'menuPage']);
Route::get('/menupage/{slug}', [ReaditemController::class,'detail'])->name('produk.show');

Route::get('/login', [LoginController::class,'login'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('masuk', [ 'as' => 'login', 'uses' => 'LoginController@do']);
