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

Route::get('/homepage', [RifadController::class, 'homepage']);
Route::get('/dashboard', [RifadController::class, 'dashboard']);
Route::get('/login', [RifadController::class, 'login']);
Route::get('/', [RifadController::class, 'home']);