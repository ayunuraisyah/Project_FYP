<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RifadController;
use App\Http\Controllers\RegisterController;

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
Route::post('/fungsi', function(){
    return view('fungsi');
});
Route::get('/login', [RifadController::class, 'login']);
Route::get('/registrasi', [RegisterController::class, 'index']);


Route::post('/registrasi', [RegisterController::class, 'create']);
Route::get('/admin', [RifadController::class, 'admin']);
// Route::get('/login', [RifadController::class, 'login']);