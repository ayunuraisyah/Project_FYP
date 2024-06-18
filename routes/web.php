<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RifadController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\itemsPostController;
use App\Http\Controllers\ReaditemController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;



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

Route::get('/', [RifadController::class, 'home'])->name('home');

Route::get('/resetpassword', [RifadController::class, 'resetpassword']);

Route::get('/buktipembayaran', [RifadController::class, 'buktipembayaran']);

Route::get('/opsipengiriman', [RifadController::class, 'opsipengiriman']);

Route::get('/lupapassword', [RifadController::class, 'lupapassword']);

Route::get('/daftaralamat', [RifadController::class, 'daftaralamat']);

Route::get('/kategori', [RifadController::class, 'kategori']);

Route::get('/profil', [RifadController::class, 'profil']);

Route::get('/adminproduk', [RifadController::class, 'adminproduk']);

Route::get('/beliProduk', [RifadController::class, 'beliProduk']);

Route::get('/test', [RifadController::class, 'test']);

Route::get('/statuspembelian', [RifadController::class, 'statuspembelian']);

Route::get('/profil2', [RifadController::class, 'profil2']);

Route::get('/detailProduk', [RifadController::class, 'detailProduk']);

// USER
Route::get('/datapengguna', [UserController::class, 'datapengguna'])->name('user');
Route::put('/datapengguna/{email}', [UserController::class, 'gantirole'])->name('user.role');
Route::delete('/datapengguna/{email}', [UserController::class, 'delete'])->name('user.delete');
Route::post('/profile/favorite', [UserController::class, 'favorit'])->name('user.favorite');
Route::delete('/profile/favorite/{email}', [UserController::class, 'deleteFavorite'])->name('user.deleteFavorite');

// REGISTRASI
Route::get('/registrasi', [RegisterController::class, 'index']);
Route::post('/registrasi', [RegisterController::class, 'create'])->name('user.create');

// PROFIL
Route::get('/profil', [ProfileController::class, 'view'])->name('profile')->middleware('auth');
Route::put('/profil/{email}', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
Route::put('/profil/photo/{email}', [ProfileController::class, 'changePhoto'])->name('profile.photo')->middleware('auth');
Route::get('/profile/favorite', [ProfileController::class, 'viewFav'])->name('profile.favorite')->middleware('auth');

// ITEM CRUD
Route::resource('/admin', itemsPostController::class)->middleware('admin');
Route::post('/adminBarang', [itemsPostController::class, 'store'])->name('item.store')->middleware('admin');
Route::get('/adminBarang', [ReaditemController::class,'view'])->middleware('admin');
Route::put('/adminBarang/{slug}', [itemsPostController::class, 'update'])->name('item.update')->middleware('admin');
Route::post('/adminBarang/{slug}', [itemsPostController::class, 'delete'])->name('item.delete')->middleware('admin');

// MENUPAGE
Route::get('/menupage', [ReaditemController::class,'menuPage']);
Route::get('/menupage/{slug}', [ReaditemController::class,'detail'])->name('produk.show');

// LOGIN DAN LOGOUT
Route::get('/login', [LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

// CART
Route::get('/cart', [CartController::class, 'view'])->name('cart')->middleware('auth');
Route::post('/cart', [CartController::class, 'addCart'])->name('cart.add')->middleware('auth');
// Route::put('/cart/decreament/{id}', [CartController::class, 'decreamentCart'])->name('cart.decreament')->middleware('auth');
// Route::put('/cart/increament/{id}', [CartController::class, 'increamentCart'])->name('cart.increament')->middleware('auth');
// Route::delete('/cart/delete/{id}', [CartController::class, 'delete'])->name('cart.delete')->middleware('auth');

// CHECKOUT
Route::post('/cart/checkout', [CheckoutController::class, 'checkout'])->name('user.checkout')->middleware('auth');

