<div class="w-full md:w-auto h-auto md:h-[320px] shadow relative">
    <img src="/storage/{{ $item->thumbnail }}" alt="" class="w-full h-[200px] object-cover">

    <div class="absolute top-2 left-2 flex items-center justify-center bg-white w-[60px] h-[25px] rounded-[10px]">
        @if (App\Models\Favorit::where('slug', $item->slug)->where('email', auth()->user()->email)->count() == 0)
        <form method="post" action="{{ route('user.favorite') }}">
            @csrf
            <input type="hidden" name="favorit" value="{{ $item->slug }}">
            <button><i class="w-[17px] h-[15px] mt-2 text-yellow-600" data-feather="star"></i></button>
        </form>
        @else
        <form method="post" action="{{ route('user.deleteFavorite', auth()->user()->email) }}">
            @csrf
            @method('delete')
            <input type="hidden" name="favorit" value="{{ $item->slug }}">
            <button><i class="w-[17px] h-[15px] text-yellow-600" data-feather="trash-2"></i></button>
        </form>
        @endif
        {{ $item->favorite }}({{ $item->sold }})
    </div>
    <p class="ml-3 font-['poppins'] font-bold text-black mt-2">{{ $item->title }}, {{ $item->origin }}</p>
    <p class="ml-3 font-['poppins'] font-bold text-black">Rp {{ number_format($item->price) }}</p>

    <div class="flex flex-col md:flex-row justify-between items-center mt-3 px-3 space-y-3 md:space-y-0">
    <a href="{{ route('produk.show', $item->slug) }}" class="w-full md:w-auto">
        <button class="w-full md:w-[70px] h-[40px] border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-900 hover:bg-green-700 cursor-pointer">Buy</button>
    </a>
    <form method="post" action="{{ route('cart.add') }}" class="w-full md:w-auto flex flex-col md:flex-row items-center space-y-3 md:space-y-0 md:space-x-2">
        @csrf
        <div class="w-full md:w-auto mr-0 md:mr-7">
            <input type="number" name="qty" id="qty" min="1" required placeholder="input quantity" class="w-full md:w-[180px] h-[40px] md:px-5 border-2 border-black rounded-md text-sm text-center text-black">
            <input type="hidden" name="slug" value="{{ $item->slug }}">
        </div>
        <button class="w-full md:w-[70px] h-[40px] border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-yellow-600 hover:bg-yellow-800 cursor-pointer">Cart</button>
    </form>
</div>

</div>
