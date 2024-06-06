<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;

class ProfileController extends Controller
{
    public function view() {
        $string = Str::of( auth()->user()->date )->split('/[\s-]+/');
        $title = 'FYP';
        $active = 'profile';
        return view('profil', compact('string', 'title', 'active') );
    }

    public function edit(User $user)
    {
        if ($user) {
            return view('profile', compact('user'));
        } else {
            return redirect()->back()->with('error', 'Profil Tidak Ditemukan');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user, $email)
    {
        $user = User::find($email);
        if($user)
        {
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->address = $request->input('address');
            $user->date = $request->input('date');
            $user->save();

            return redirect()->route('profile')->with('success', 'Profil Berhasil Di Update');
        }
        else 
        {
            return redirect()->back()->with('error', 'Profil Tidak Ditemukan');
        }
    }

}
