<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class itemsPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin',
    [
        'title' => 'FYP',
        'active' => 'Admin'
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Item;
        $item->title = $request->input('title');
        $item->origin = $request->input('origin');  
        $item->stock = $request->input('stock');  
        $item->rating = $request->input('rating');  
        $item->sold = $request->input('sold');
        $item->thumbnail = $request->file('thumbnail')->store('thumbnail');;  
        $item->price = $request->input('price');  
        $item->description = $request->input('description');  
        $item->save();

        return redirect()->back()->with('success', 'Succeed');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        // $items = Item::get();
        // foreach($items as $item){
        //     $title[] = $item->title;
        //     $origin[] = $item->origin;
        //     $stock[] = $item->stock;
        //     $rating[] = $item->rating;
        //     $sold[] = $item->sold;
        //     $thumbnail[] = $item->thumbnail;
        //     $slug[] = $item->slug;
        //     $price[] = $item->price;
        //     $description[] = $item->description;
        // }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}

