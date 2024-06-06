<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;



class ReaditemController extends Controller
{
    public function view()
    {
        
        return view('adminBarang', 
        [
            'title' => 'FYP',
            'active' => 'Admin',
            'items' => Item::all(),
            'data' => json_encode(Item::all()),
            'no' => 0,
            ]);
    }

    public function menuPage()
    {
        return view('menupage', 
        [
            'title' => 'FYP',
            'active' => 'Admin',
            'items' => Item::all(),
        ]);
    }

    public function detail($slug){
        $item = Item::find($slug);

        if($item)
        {
            return view('detailProduk', [
                'title' => 'FYP',
                'active' => 'Product Detail',
                'item' => $item
            ]);
        }
        else
        {
            redirect()->back()->with('error', 'Item Not Found');
        }
    }
}
