<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Favorit;
use App\Models\Item;

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
        $user->role = $request->input('role');
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

    public function favorit(Request $request)
    {
        $fav = new Favorit;
        $fav->slug = $request->input('favorit');
        $fav->user = auth()->user()->email;
        $fav->save();

        $cekItem = Item::find($request->input('favorit'));
        $cekItem->favorite += 1;
        $cekItem->save();

        return redirect()->route('profile.favorite');
    }

    public function deleteFavorite(Request $request)
    {
        $cekFav = Favorit::where('slug', $request->input('favorit'))->where('user', auth()->user()->email);
        $cekFav->delete();

        $cekItem = Item::find($request->input('favorit'));
        $cekItem->favorite -= 1;
        $cekItem->save();

        return redirect()->route('profile.favorite');
    }
}