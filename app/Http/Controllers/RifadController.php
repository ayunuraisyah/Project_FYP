<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RifadController extends Controller
{

    public function home(){
        return view('home');
    }
    public function menupage(){
        return view('menupage');
    }
    public function detailProduk(){
        return view('detailProduk');
    }
    public function kategori(){
        return view('kategori');
    }

    public function login(){
        return view('login');
    }

    public function registrasi(){
        return view('registrasi');
    }
    public function admin(){
        return view('admin');
    }

}
