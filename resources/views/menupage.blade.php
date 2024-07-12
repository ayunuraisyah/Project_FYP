@extends('layout.dashboard')
@section('content')

<div class="ml-4 font-bold text-3xl font-['Poppins'] mt-3 text-center md:text-left">
    <h2 class="mb-3">Hi {{ auth()->user()->name }}</h2>
    <h2 class="mt-2">Makanan daerah mana yang kamu mau hari ini?</h2>
</div>

<form action="{{ route('user.searchMenu') }}" method="post" class="relative mt-3 md:mt-3 md:ml-3 flex items-center justify-center md:justify-start">
    @csrf
    <div class="relative flex items-center mb-2 md:mb-0">
        <input type="text" placeholder="Cari apa" name="query" class="w-[392px] md:w-[700px] h-[65px] pl-[50px] bg-zinc-300 rounded-[20px] pr-4 placeholder-lg">
        <i data-feather="search" class="absolute left-0 top-0 mt-6 ml-3 text-gray-400"></i>
    </div>

    <div class="ml-2 md:ml-4 flex-shrink-0">
        <div class="w-[60px] md:w-[70px] h-[65px] md:h-[70px] bg-[#61AE77] rounded-[20px] flex items-center justify-center">
            <a href="">
                <i data-feather="list" class="w-[32px] md:w-[42px] h-[32px] md:h-[55px] text-white"></i>
            </a>
        </div>
    </div>
</form>

<div class="mt-[10px] grid grid-cols-2 md:grid-cols-5 md:p-4 gap-4 px-3">
    <a href="/kategori/Jawa">
        <div class="w-full h-[200px] relative shadow rounded-[10px]">
            <img class="w-full h-[133.33px] absolute rounded-[10px] object-cover" src="/img/peta-daerah/Jawa.jpeg" />
            <p class="w-full absolute bottom-4 text-center text-black text-[20px] font-bold font-['poppins']">
                jawa
            </p>
        </div>
    </a>
    <a href="/kategori/Bali">
        <div class="w-full h-[200px] relative shadow rounded-[10px]">
            <img class="w-full h-[133.33px] absolute rounded-[10px] object-cover" src="/img/peta-daerah/Bali.jpeg" />
            <p class="w-full absolute bottom-4 text-center text-black text-[20px] font-bold font-['poppins']">
                bali
            </p>
        </div>
    </a>
    <a href="/kategori/Sulawesi">
        <div class="w-full h-[200px] relative shadow rounded-[10px]">
            <img class="w-full h-[133.33px] absolute rounded-[10px] object-cover" src="/img/peta-daerah/Sulawesi.jpeg" />
            <p class="w-full absolute bottom-4 text-center text-black text-[20px] font-bold font-['poppins']">
                sulawesi
            </p>
        </div>
    </a>
    <a href="/kategori/Sumatra">
        <div class="w-full h-[200px] relative shadow rounded-[10px]">
            <img class="w-full h-[133.33px] absolute rounded-[10px] object-cover" src="/img/peta-daerah/Sumatra.jpeg" />
            <p class="w-full absolute bottom-4 text-center text-black text-[20px] font-bold font-['poppins']">
                sumatra
            </p>
        </div>
    </a>
    <a href="/kategori/Kalimantan">
        <div class="w-full h-[200px] relative shadow rounded-[10px]">
            <img class="w-full h-[133.33px] absolute rounded-[10px] object-cover" src="/img/peta-daerah/Papua.jpeg" />
            <p class="w-full absolute bottom-4 text-center text-black text-[20px] font-bold font-['poppins']">
                kalimantan
            </p>
        </div>
    </a>
</div>
<div class="relative mt-6">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="img/Banner1.png" alt="">
            </div>
            <div class="swiper-slide">
                <img src="img/Banner2.png" alt="">
            </div>
            <div class="swiper-slide">
                <img src="img/Banner3.png" alt="">
            </div>
            <div class="swiper-slide">
                <img src="img/Banner4.png" alt="">
            </div>
            <div class="swiper-slide">
                <img src="img/Banner5.png" alt="">
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>

<div class="mt-6 grid grid-cols-2 gap-4 px-2 md:grid-cols-4 md:px-5">
    @foreach($items as $item)
    @include('components.itemCard')
    @endforeach
</div>

@endsection
