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
        ]);
    }
}
