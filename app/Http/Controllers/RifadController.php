<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RifadController extends Controller
{

    public function home(){
        return view('home',
    [
        'tittle' => 'FYP',
        'active' => 'Home'
    ]);
    }
    public function menupage(){
        return view('menupage',
    [
        'tittle' => 'FYP',
        'active' => 'Menupage'
    ]);
    }
    public function detailProduk(){
        return view('detailProduk',
    [
        'tittle' => 'FYP',
        'active' => 'Product Detail'
    ]);
    }
    public function kategori(){
        return view('kategori',
    [
        'tittle' => 'FYP',
        'active' => 'Category'
    ]);
    }
    public function admin(){
        return view('admin',
    [
        'tittle' => 'FYP',
        'active' => 'Admin'
    ]);
    }
    public function edit(){
        return view('adminBarang',
    [
        'tittle' => 'FYP',
        'active' => 'Admin'
    ]);
    }

}
