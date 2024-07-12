@extends('layout.templateKategori')

@section('content')

    <div class=" ml-4   text-black text-[30px] font-bold font-['Poppins']">
        Hi {{ auth()->user()->name }}</div>

    <div class="ml-4 mt-[10px]  text-black text-[30px] font-bold font-['Poppins']">
        Selamat datang di {{ $origin }},mau makan apa?</div>



    <div class="mt-[3px] grid p-5 grid-cols-2 gap-2  md:grid-cols-3 md:gap-3
        ">
        @foreach ($items as $item)
            @include('components.itemCard')
        @endforeach
    </div>


    @endsection


   