@extends('layout.dashboard2')
@section('content')

<div class="flex flex-col lg:flex-row w-full h-auto lg:h-[600px]">
<div class="flex flex-col md:flex-row w-full min-h-screen">
<div class="hidden md:block w-full md:w-[300px] h-full">
    <div class="mt-[80px] ml-[30px] md:ml-4">
        @include('components.userSideBar')
    </div>
</div>

    <div class="w-full lg:w-[59%] h-full mt-8 lg:mt-[60px] ml-4 lg:ml-[190px]">
        <h2 class="text-4xl ml-4 lg:ml-[60px] font-bold font-Poppins">Status</h2>
        <hr class="w-full border-t-2 border-black mt-3">

        <div class="overflow-x-auto">
            <table class="w-full bg-white border border-gray-200 mt-3">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-2 lg:px-6 py-3 border-b border-gray-200 text-gray-600 text-left text-sm uppercase font-bold">Nama Makanan</th>
                        <th class="px-2 lg:px-6 py-3 border-b border-gray-200 text-gray-600 text-left text-sm uppercase font-bold">Jumlah makanan</th>
                        <th class="px-2 lg:px-6 py-3 border-b border-gray-200 text-gray-600 text-left text-sm uppercase font-bold">Sub Total</th>
                        <th class="px-2 lg:px-6 py-3 border-b border-gray-200 text-gray-600 text-left text-sm uppercase font-bold">Note</th>
                        <th class="px-2 lg:px-6 py-3 border-b border-gray-200 text-gray-600 text-left text-sm uppercase font-bold text-center">Status</th>
                        <th class="px-2 lg:px-6 py-3 border-b border-gray-200 text-gray-600 text-left text-sm uppercase font-bold">Receipt</th>
                        <th class="px-2 lg:px-6 py-3 border-b border-gray-200 text-gray-600 text-left text-sm uppercase font-bold">Order Number</th>
                        <th class="px-2 lg:px-6 py-3 border-b border-gray-200 text-gray-600 text-left text-sm uppercase font-bold">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr class="hover:bg-gray-50">
                        <td class="px-2 lg:px-6 py-4 border-b border-gray-200 text-sm">{{ Str::replace('-', ' ',$item->slug) }}</td>
                        <td class="px-2 lg:px-6 py-4 border-b border-gray-200 text-sm">{{ $item->qty }}</td>
                        <td class="px-2 lg:px-6 py-4 border-b border-gray-200 text-sm">Rp {{ number_format($item->total) }}</td>
                        <td class="px-2 lg:px-6 py-4 border-b border-gray-200 text-sm">{{ $item->note }}</td>
                        <td class="px-2 lg:px-6 py-4 border-b border-gray-200 text-sm text-center" width="120%">
                            <span class="px-2 py-1 rounded-full bg-green-500 text-white text-xs">{{ $item->status }}</span>
                        </td>
                        @if($item->receipt == NULL)
                        <td></td>
                        <td></td>
                        <td class="px-2 lg:px-6 py-4 border-b border-gray-200 text-sm">
                            <form action="{{ route('user.pay', $item->orderNum) }}" method="post">
                                @csrf
                                <button class="px-2 py-1 rounded-full bg-green-500 text-white text-xs">Bayar</button>
                            </form>
                        </td>
                        @else
                        <td class="px-2 lg:px-6 py-4 border-b border-gray-200 text-sm">
                            <img src="/storage/{{ $item->receipt }}" alt="{{ $item->slug }}" class="w-16 h-16 object-cover rounded">
                        </td>
                        <td class="px-2 lg:px-6 py-4 border-b border-gray-200 text-sm">{{ $item->orderNum }}</td>
                        <td>
                            <form action="{{ route('user.struk', $item->orderNum) }}" method="post">
                                @csrf
                                <button class="px-2 py-1 rounded-full bg-green-500 text-white text-xs">See Struk</button>
                            </form>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection
