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
    public function keranjang(){
        return view('keranjang',
    [
        'title' => 'FYP',
        'active' => 'keranjang'
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
    public function profil(){
        return view('profil',
    [
        'title' => 'FYP',
        'active' => 'profil'
    ]);
    }
    public function admin(){
        return view('admin',
    [
        'title' => 'FYP',
        'active' => 'Admin'
    ]);
}
    public function adminproduk(){
        return view('adminproduk',
    [
        'title' => 'FYP',
        'active' => 'adminproduk'
    ]);
    }
    public function beliProduk(){
        return view('beliProduk',
    [
        'title' => 'FYP',
        'active' => 'beliProduk'
    ]);
}
    public function statuspembelian(){
        return view('statuspembelian',
    [
        'title' => 'FYP',
        'active' => 'statuspembelian'
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
