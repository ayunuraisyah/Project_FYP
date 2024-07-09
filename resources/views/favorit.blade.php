@extends('layout.dashboard2')
@section('content')

<div class="flex flex-col md:flex-row w-full h-auto md:h-[600px]">
    <div class="w-full md:w-[300px] h-full">
        <div class="mt-[80px] ml-[30px] md:ml-5">
            @include('components.userSideBar')
        </div>
    </div>

    <div class="w-full md:w-[95%] h-full md:ml-[190px]">
        <div class="mt-[60px]">
            <h2 class="text-4xl ml-[60px] font-bold font-['Poppins']">Favorit</h2>
            <hr class="w-full border-t-2 border-black mt-3">
        </div>
        <div class="mt-6 grid p-5 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2">
            @if($items == NULL)
                <p>Kamu belum memiliki makanan favorit! <a href="/menu" class="text-[#61AE77]"> click disini untuk melihat menu </a></p>
            @else
                @foreach ($items as $item)
                    @include('components.itemCard')
                @endforeach
            @endif
        </div>
    </div>
</div>
`
@endsection
