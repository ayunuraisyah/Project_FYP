<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RifadController extends Controller
{

    public function menupage(){
        return view('menupage');
    }
    public function login(){
        return view('login');
    }

    public function registrasi(){
        return view('registrasi');
    }

}
