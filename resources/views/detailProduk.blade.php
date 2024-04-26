@extends('layout.templateKategori')

@section('content')

<div class="container items-center justify-center flex gap-20 mt-[50px]">
  <div class="h-[40vh] ">
    <img src="img/menupage/Rawon Menupage.jpeg" alt="" class="rounded-[20px]">
  </div>
  
  <div class="flex items-start">
    <div class=" h-[40vh]">
    <h2>rawon,jawa timur</h2>
    <div>
      <button><i class=" w-[17px] h-[15px] text-yellow-600" data-feather="star"></i></button> 4.6 (tersisa 20)
      <p>Rp. 18.000</p>
    </div>
    

    <div class="w-[70%] h-[5vh] bg-[#07511B] rounded-[15px] items-center flex justify-center">
    <i data-feather="shopping-cart" class=" text-white w-[35px] h-[30px]"></i>
    </div>

    <div class="mt-3" >
      <form action="" class="flex">
      <input type="number" class="w-[70%] h-[5vh]  bg-[#D9D9D9] text-white placeholder-black" placeholder="1">
      <button class="w-[70%] h-[5vh] bg-[#07511B] rounded-[5px] ml-4">pesan</button>
      </form>
      
    </div>
    </div>
  </div>
  
</div>


<div class=" w-[100%]  container items-center justify-center flex  mt-[50px]">
  <div>
 <h1><b>Deskripsi:</b></h1>
  <p>Rawon (Aksara Jawa:ꦫꦮꦺꦴꦤ꧀) adalah masakan khas Indonesia yang berasal dari Ponorogo, Jawa Timur, yang berupa sup daging berkuah hitam dengan campuran bumbu khas yang menggunakan kluwek. Makanan ini telah berusia lebih dari 1.000 tahun. Daging untuk rawon umumnya adalah daging sapi yang dipotong kecil-kecil, Namun terkadang rawon juga hadir dengan daging ayam. Rawon disajikan bersama nasi, dilengkapi dengan tauge berekor pendek, telur asin, daun bawang, kerupuk udang, daging sapi goreng (empal), dan sambal.</p>
  </div>
  
</div>


@endsection