<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RifadController extends Controller
{
    // public function getData(){
    //     // logika
    //     $dataBarang = [
    //         ['id' => 1, 'nama' => 'Beras Pandan Wangi', 'harga' => '15000'],
    //         ['id' => 2, 'nama' => 'Tepung Terigu', 'harga' => '20000'],
    //         ['id' => 3, 'nama' => 'Baygon Cair', 'harga' => '13500'],
    //         ['id' => 4, 'nama' => 'Royco', 'harga' => '3200'],
    //         ['id' => 5, 'nama' => 'Minyak Goreng', 'harga' => '14000'],
    //     ];
    //     return $dataBarang;
    // }

    // public function tampilkan(){
    //     $data = $this->getData();
    //     return view('home', compact('data'));
    // }

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
