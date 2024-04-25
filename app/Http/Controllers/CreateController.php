<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\items;


class CreateController extends Controller
{
    public function index()
    {
        return view('admin');
    }
    public function create(Request $request){
        $validate = $request->validate([
            'namaMakanan' => 'required',
            'daerah' => 'required',
            'harga' => 'required',
            'stock' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
        ]);

        items::create($validate);
        return redirect('/admin');
    }
}
