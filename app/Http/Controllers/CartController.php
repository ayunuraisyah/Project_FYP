<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;


class CartController extends Controller
{
    public function view()
    {
        $dataCarts = Cart::where('user', [auth()->user()->email])->get();
        $i = 0;
        $a = 0;
        $b = 0;
        $c = 0;
        foreach($dataCarts as $key)
        {
            $data[$i++] = $key['slug'];
            $dataid[$b++] = $key['id'];
            $dataItems[] = Item::find($data[$a++]);
            $dataCart[] = Cart::find($dataid[$c++]);

            // $dataArray = array_combine($dataCart, $dataItems);
        }
        // dd($dataArray);
        return view('keranjang2',[
            'title' => 'FYP',
            'active' => 'Cart',
            'dataItems' => $dataItems ?? null,
            'dataCart' => $dataCart ?? null,
            // 'all' => $dataArray,
            'a' => 0,
            'b' => 0,
            'c' => 0,
            'd' => 0,
            'e' => 0,
            'f' => 0,
            'g' => 0,
            'h' => 0,
            'o' => 0,
            'j' => 0,
            'k' => 0,
            'l' => 0,
            'm' => 0,
            'n' => 0,
        ]);
    }

    public function addCart(Request $request)
    {
        $itemData = Item::find($request->input('slug'));
        if($itemData)
        {
            $data = Cart::where('user', [auth()->user()->email])->where('slug', [$request->input('slug')])->get();
            if(!$data->isEmpty())
            {
                foreach($data as $item)
                {
                    $item->qty = $item->qty + $request->input('qty');
                    $item->save();
                    
                    return redirect()->route('cart')->with('cartIncreament', 'Item succes');
                }
            }
            else{
                $item = new Cart;
                $item->slug = $itemData->slug;
                $item->qty = $request->input('qty');
                $item->user = Auth()->user()->email;
                $item->save();
    
                return redirect()->route('cart')->with('cartSuccess', 'Item succes add to cart');
            }
        }
    }

    public function decreamentCart($id)
    {
        $cart = Cart::find($id);
        $cart->qty = $cart->qty - 1;
        $cart->save();

        return redirect()->route('cart.add');
    }

    public function increamentCart($id)
    {
        $cart = Cart::find($id);
        $cart->qty = $cart->qty + 1;
        $cart->save();

        return redirect()->route('cart.add');
    }

    public function delete($id)
    {
        $cart = Cart::find($id);
        $cart->delete();

        return redirect()->back()->with("deleteCart", "Delete cart success");
    }
}
