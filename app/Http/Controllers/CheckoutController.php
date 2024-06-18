<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Item;

class checkoutController extends Controller
{
    public function checkout(Request $request)
    {
        switch ( $request->input('action') )
        {
            case 'increament':
                $cart = Cart::find($request->input('idCart'));
                $cart->qty = $cart->qty + 1;
                $cart->save();

                return redirect()->route('cart.add');
                break;
            case 'decreament':
                $cart = Cart::find($request->input('idCart'));
                $cart->qty = $cart->qty - 1;
                $cart->save();

                return redirect()->route('cart.add');
                break;
            case 'delete':
                $cart = Cart::find($request->input('idCart'));
                $cart->delete();

                return back()->with("deleteCart", "Delete cart success");
                break;
            case 'checkout':
                $validate = $request->validate([
                    'itemCart' => 'required',
                ]);
                $a = 0;
                foreach($validate as $data)
                {
                    $slug = $data;
                    $dataItems = Item::find($slug);
                    $dataCarts = Cart::whereIn('slug', $slug)->where('user', [auth()->user()->email])->get();
                }

                $totalHarga = $request->input('totalHarga');
                $totalItem = $request->input('totalItem');
                // dd($totalHarga);
                $title = "FYP";
                $active = "Checkout";

                return view('beliproduk', compact('dataCarts','dataItems','totalHarga', 'totalItem', 'title', 'active'));
                break;
        }
        
    }
}
