<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('registrasi');
    }
    public function create(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|max:255',
            'tanggal' => 'required',
            'email' => 'required|email:dns|unique:users',
            'sandi' => 'required',
            'resandi' => 'required|after:sandi'
        ]);


        $validate['sandi'] = Bcrypt($validate['sandi']);

        User::create($validate);
        return redirect('/login');

    }
}
