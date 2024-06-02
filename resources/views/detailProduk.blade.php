@extends('layout.templateKategori')

@section('content')

<div class="container items-center justify-center flex gap-20 mt-[50px]">
  <div class="h-[40vh] ">
    <img src="/storage/{{ $item->thumbnail }}" alt="" class="rounded-[20px]">
  </div>
  
  <div class="flex items-start">
    <div class=" h-[40vh]">
    <h2>{{ $item->title }},{{ $item->origin }}</h2>
    <div>
      <button><i class=" w-[17px] h-[15px] text-yellow-600" data-feather="star"></i></button> {{ $item->rating }} (tersisa {{ $item->stock }})
      <p>Rp. {{ $item->price }}</p>
    </div>
    

    <div class="w-[70%] h-[5vh] bg-[#07511B] rounded-[15px] items-center flex justify-center">
    <i data-feather="shopping-cart" class=" text-white w-[35px] h-[30px]"></i>
    </div>

    <div class="mt-3" >
      <form action="" class="flex">
      <input type="number" class="w-[70%] h-[5vh]  bg-[#D9D9D9] text-white placeholder-black" placeholder="1">
      <a href="/beliProduk">
      <button class="w-[70%] h-[5vh] bg-[#07511B] rounded-[5px] ml-4">pesan</button>
      </a>
      </form>
      
    </div>
    </div>
  </div>
  
</div>


<div class=" w-[100%]  container items-center justify-center flex  mt-[50px]">
  <div>
    <h1><b>Deskripsi:</b></h1>
    <p>{{ $item->description }}.</p>
  </div>
  
</div>


@endsection