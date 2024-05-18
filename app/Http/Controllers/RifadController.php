<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RifadController extends Controller
{

    public function home(){
        return view('home',
    [
        'title' => 'FYP',
        'active' => 'Home'
    ]);
    }
    public function menupage(){
        return view('menupage',
    [
        'title' => 'FYP',
        'active' => 'Menupage'
    ]);
    }
    public function detailProduk(){
        return view('detailProduk',
    [
        'title' => 'FYP',
        'active' => 'Product Detail'
    ]);
    }
    public function kategori(){
        return view('kategori',
    [
        'title' => 'FYP',
        'active' => 'Category'
    ]);
    }
    public function admin(){
        return view('admin',
    [
        'title' => 'FYP',
        'active' => 'Admin'
    ]);
    }
    public function edit(){
        return view('adminBarang',
    [
        'title' => 'FYP',
        'active' => 'Admin'
    ]);
    }

}
