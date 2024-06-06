<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    public function index()
    {
        return view('registrasi',
    [
        'title' => 'FYP',
        'active' => 'Registration'
    ]);
    }
    public function create(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|max:255',
            'date' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required',
            'repassword' => 'required',
            'address' => 'required',
            'status' => 'required',
            'photo' => 'required'
        ]);

        if($validate['repassword'] === $validate['password'])
        {
            $validate['password'] = Bcrypt($validate['password']);
            $validate['photo'] = $request->file('photo')->store('profile'); 
            

    
            User::create($validate);
            return redirect('/login');
        }
            return back()->with('registerError', 'Password not macth!');


    }
}
