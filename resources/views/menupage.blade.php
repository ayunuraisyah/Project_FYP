
   @extends('layout.dashboard')
   @section('content')


   <div class="left-[14px] top-[100px] absolute text-black text-[30px] font-bold font-['Poppins']">
        Hi Ayu</div>

    <div class=" left-[14px] top-[150px] absolute text-black text-[30px] font-bold font-['Poppins']">
        Makanan daerah mana yang kamu mau hari ini?</div>


    <form action="" class="relative mt-[130px] left-[14px] flex items-center">
        <div class="relative flex items-center">
            <input type="text" placeholder="Cari apa"
                class="w-[700px] h-[70px] pl-[50px] bg-zinc-300 rounded-[20px] pr-4 placeholder-lg">
            <i data-feather="search" class="absolute left-0 top-0 mt-6 ml-3 text-gray-400"></i>

        </div>

        <div class="w-[70px] h-[70px] bg-[#61AE77] rounded-[10px] ml-2 flex items-center justify-center">
            <a href="">
                <i data-feather="list" class="w-[42px] h-[42px] text-white"></i>
            </a>
        </div>
    </form>

    <div class=" mt-[10px] grid grid-cols-2  md:grid-cols-5 md:p-4 ">

        <a href="/kategori">
            <div class="w-[280px] h-[200px] relative shadow">
                <img class="w-[239.32px] h-[133.33px] left-[21.78px] top-[17.78px] absolute rounded-[20px]"
                    src="img/peta-daerah/Jawa.jpeg" />
                <p
                    class="w-28 h-[48.89px] left-[84px] top-[155px] absolute text-center text-black text-[20px] font-bold font-['poppins']">
                    jawa</p>
            </div>
        </a>
        <a href="">
            <div class="w-[280px] h-[200px] relative shadow">
                <img class="w-[239.32px] h-[133.33px] left-[21.78px] top-[17.78px] absolute rounded-[20px]"
                    src="{{ ('../img/peta-daerah/Bali.jpeg') }}" />
                <p
                    class="w-28 h-[48.89px] left-[84px] top-[155px] absolute text-center text-black text-[20px] font-bold font-['poppins']">
                    bali</p>
            </div>
        </a>
        <a href="">
            <div class="w-[280px] h-[200px] relative shadow">
                <img class="w-[239.32px] h-[133.33px] left-[21.78px] top-[17.78px] absolute rounded-[20px]"
                    src="img/peta-daerah/Sulawesi.jpeg" />
                <p
                    class="w-28 h-[48.89px] left-[84px] top-[155px] absolute text-center text-black text-[20px] font-bold font-['poppins']">
                    sulawesi</p>
            </div>
        </a>
        <a href="">
            <div class="w-[280px] h-[200px] relative shadow">
                <img class="w-[239.32px] h-[133.33px] left-[21.78px] top-[17.78px] absolute rounded-[20px]"
                    src="img/peta-daerah/Sumatra.jpeg" />
                <p
                    class="w-28 h-[48.89px] left-[84px] top-[155px] absolute text-center text-black text-[20px] font-bold font-['poppins']">
                    sumatra</p>
            </div>
        </a>
        <a href="">
            <div class="w-[280px] h-[200px] relative shadow">
                <img class="w-[239.32px] h-[133.33px] left-[21.78px] top-[17.78px] absolute rounded-[20px]"
                    src="img/peta-daerah/Papua.jpeg" />
                <p
                    class="w-28 h-[48.89px] left-[84px] top-[155px] absolute text-center text-black text-[20px] font-bold font-['poppins']">
                    kalimantan</p>
            </div>
        </a>


    </div>



    <div class="mt-6">
        <img src="img/Banner2.png" alt="">
    </div>

    <div class="mt-6 grid p-5 grid-cols-2 gap-2  md:grid-cols-3 
        md:px-5 ">

        @foreach($items as $item)
        <div class="top-0 w-[359px] h-[300px] bg-white rounded-[10px] shadow">
                <img class="left-0 top-0 w-[359px] h-[200px] rounded-[10px]" src="/storage/{{ $item->thumbnail }}" />
                <div class="px-[3px] bg-white rounded-[5px]">
                    <button><i class="w-[17px] h-[15px] text-yellow-600" data-feather="star"></i></button>{{ $item->rating }}({{ $item->sold }})
                    <p>{{ $item->title }}, {{ $item->origin }}</p>
                    <p>{{ $item->price }}</p>

                    <div class="flex justify-between mt-3">
                        <a href="{{ route('produk.show', $item->slug) }}"><button class="success-button py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-900 hover:bg-indigo-700 cursor-pointer mb-2">Buy</button></a>
                        <form method="post" action="{{ route('cart.add') }}">
                            @csrf
                            <input type="number" name="qty" id="slug" min="1" required placeholder="please input quantity">
                            <input type="hidden" name="slug" id="slug" value="{{ $item->slug }}">
                            <button class="edit-button py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-yellow-600 hover:bg-yellow-800 cursor-pointer mb-2">cart</button>
                        </form>                    
                    </div>
                </div>
            </div>
        @endforeach

    </div>
     
    <button class="w-[250px] h-[62px] left-[1190px] top-[2000px] absolute bg-[#61AE77]  text-white rounded-[10px]">
        selengkapnya
    </button>

   @endsection