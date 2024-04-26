<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RifadController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CreateController;

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

<<<<<<< HEAD
Route::get('/menupage', [RifadController::class, 'menupage']);

Route::get('/kategori', [RifadController::class, 'kategori']);

Route::get('/detailProduk', [RifadController::class, 'detailProduk']);

=======
>>>>>>> 31a802f1e1e129979f25527074389e4b2db8d0e6
Route::get('/registrasi', [RegisterController::class, 'index']);
Route::post('/registrasi', [RegisterController::class, 'create']);

Route::get('/admin', [CreateController::class, 'index']);
Route::post('/admin', [CreateController::class, 'create']);
Route::get('/adminBarang', [CreateController::class, 'edit']);


Route::get('/login', [LoginController::class,'login']);
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
