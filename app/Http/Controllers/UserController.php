<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function datapengguna(){
        return view('datapengguna',
        [
        'title' => 'FYP',
        'active' => 'datapengguna',
        'user' => User::all(),
        ]);
    }

    public function gantirole(Request $request,$email){
        $user = User::find($email);
        $user->role=$request->input('role');
        $user->save();
        return back()->with('success','Role Berhasil Diubah');
    }

    public function delete($email)
    {
        $user = User::find($email);
        Storage::delete($user->photo);
        $user->delete();
        return back()->with('delete','User Telah Dihapus');
    }
}