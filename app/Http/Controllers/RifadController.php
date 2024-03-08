<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RifadController extends Controller
{

    public function homepage(){
        return view('homepage');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function login(){
        return view('login');
    }

    public function home(){
        return view('home');
    }
}
