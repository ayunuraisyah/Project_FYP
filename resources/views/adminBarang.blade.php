@extends('layout.adminPage')

@section('content')
<div class="flex justify-start items-start h-[100%] flex-wrap gap-[10px]">
    @foreach ($items as $item)
        <div class=" top-0 w-[359px] h-[300px] bg-white rounded-[10px] shadow">
            <img class=" left-0 top-0 w-[359px] h-[200px] rounded-[10px]"
                src="/storage/{{ $item->thumbnail }}" />
            <div class="px-[3px] bg-white rounded-[5px]">
                <button><i class=" w-[17px] h-[15px] text-yellow-600" data-feather="star"></i></button>{{ $item->rating }}({{ $item->sold }})
                <p>{{ $item->title }}, {{ $item->origin }}</p>
                <p>{{ $item->price }}</p>

                <button class="w-[100%] py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-900 hover:bg-indigo-700 cursor-pointer mb-2">Edit</button>
            </div>
        </div>
    @endforeach
</div>
@endsection