<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RifadController;
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

Route::get('/', [RifadController::class, 'menupage']);
Route::get('/login', [RifadController::class, 'login']);
Route::get('/registrasi', [RifadController::class, 'registrasi']);
Route::get('/admin', [RifadController::class, 'admin']);
// Route::get('/login', [RifadController::class, 'login']);