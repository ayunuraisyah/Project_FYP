@extends('layout.templateKategori')

@section('content')

<div class="flex items-center justify-center mb-[75px]">
  <div class="w-full max-w-[700px] h-auto md:h-[500px] p-4">
    <div class="flex flex-col md:flex-row w-full h-auto  justify-center md:space-x-8 pt-[75px] ">
      <img src="/storage/{{ $item->thumbnail }}" alt="rawon" class="w-full md:w-[340px] h-auto md:h-[250px] rounded-[10px]">

      <div class="mt-4 md:mt-0">
        <h2 class="font-bold font-['Poppins'] text-3xl">{{ $item->title }}, {{ $item->origin }}</h2>
        <p class="mt-4">{{ $item->rating }} (tersisa {{ $item->stock }})</p>
        <p class="font-bold font-['Poppins'] text-xl mt-4">Rp. {{ number_format($item->price) }}</p>

        {{-- <div class="flex mt-4 space-x-7">
          <div class="flex bg-green-600 rounded-[20px] w-[100px] h-[35px] items-center justify-center space-x-4">
            <i data-feather="heart"></i>
            <p>favorit</p>
          </div>
          <div class="bg-green-600 rounded-[20px] w-[80px] h-[35px] flex items-center justify-center">
            <i data-feather="shopping-cart"></i>
          </div>
        </div> --}}

        <div class="flex mt-4 space-x-8">
          <form action="{{ route('user.buyNow') }}" method="post">
            @csrf
            <div>
              {{-- <button class="px-2 py-2 text-white bg-gray-400"><</button> --}}
              <input type="hidden" name="slug" id="slug" value="{{ $item->slug }}">
              <input type="hidden" name="totalHarga" id="totalHarga" value="{{ $item->price }}">
              <input type="number" name="qty" id="" placeholder="insert nominal" required class="w-full md:w-[120px] md:rounded-[7px] border border-black text-center">

              {{-- <button class="px-2 py-2 text-white bg-gray-400">></button> --}}
            </div>

            <div class="bg-green-600 rounded-[7px] w-full md:w-[130px] h-[35px] flex justify-center items-center mt-4">
              <button class="w-full">beli sekarang</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="mt-3 md:ml-[52px]">
      <h1 class="text-2xl font-bold">Deskripsi:</h1>
      <p>{{ strip_tags($item->description) }}.</p>
    </div>
  </div>
</div>

@endsection
