
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

        <a href="">
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
        <div class="aspect-[4/3] relative px-5">
            <div class="absolute top-0 w-[359px] h-[300px] bg-white rounded-[10px] shadow">
                <img class="absolute left-0 top-0 w-[359px] h-[200px] rounded-[10px]"
                    src="img/menupage/Rawon Menupage.jpeg" />


                <div class="absolute left-[16.85px] top-[11.88px] w-[115.17px] h-[24.67px] bg-white rounded-[20px]">

                    <div class="absolute flex items-center ml-2">
                        <i class=" w-[17px] h-[15px] text-yellow-600" data-feather="star"></i>
                        <div class="ml-2">
                            <span>4.6</span>
                            <span>(120)</span>
                        </div>
                    </div>

                </div>

                <div
                    class="absolute left-[48.69px] top-[160px] w-[106.75px] h-[36.55px] text-white text-xl font-bold font-Mulish leading-relaxed">
                    0.5 km
                </div>

                <div class="absolute left-[20.28px] top-[165px]">
                    <i data-feather="map-pin" class="text-white "></i>
                </div>

                <div
                    class="absolute left-[16.85px] top-[200px] w-[481.52px] h-[62.73px] text-black text-[20px] font-bold font-Mulish leading-[45.50px]">
                    Rawon, Jawa Timur
                </div>

                <div
                    class="absolute left-[20.60px] top-[230px] w-[168.55px] h-[39.29px] text-zinc-500 text-[20px] font-normal font-Mulish leading-loose">
                    Rp. 18.000
                </div>
            </div>

        </div>
        <div class="aspect-[4/3] relative px-5">
            <div class="absolute top-0 w-[359px] h-[300px] bg-white rounded-[10px] shadow">
                <img class="absolute left-0 top-0 w-[359px] h-[200px] rounded-[10px]"
                    src="img/menupage/Sate Lilit Menupage.jpeg" />


                <div class="absolute left-[16.85px] top-[11.88px] w-[115.17px] h-[24.67px] bg-white rounded-[20px]">

                    <div class="absolute flex items-center ml-2">
                        <i class=" w-[17px] h-[15px] text-yellow-600" data-feather="star"></i>
                        <div class="ml-2">
                            <span>4.5</span>
                            <span>(120)</span>
                        </div>
                    </div>

                </div>

                <div
                    class="absolute left-[48.69px] top-[160px] w-[106.75px] h-[36.55px] text-white text-xl font-bold font-Mulish leading-relaxed">
                    0.5 km
                </div>

                <div class="absolute left-[20.28px] top-[165px]">
                    <i data-feather="map-pin" class="text-white "></i>
                </div>

                <div
                    class="absolute left-[16.85px] top-[200px] w-[481.52px] h-[62.73px] text-black text-[20px] font-bold font-Mulish leading-[45.50px]">
                    sate lilit, Bali
                </div>

                <div
                    class="absolute left-[20.60px] top-[230px] w-[168.55px] h-[39.29px] text-zinc-500 text-[20px] font-normal font-Mulish leading-loose">
                    Rp. 23.000
                </div>
            </div>

        </div>
        <div class="aspect-[4/3] relative px-5">
            <div class="absolute top-0 w-[359px] h-[300px] bg-white rounded-[10px] shadow">
                <img class="absolute left-0 top-0 w-[359px] h-[200px] rounded-[10px]"
                    src="img/menupage/Coto Makassar Menupage.jpeg" />


                <div class="absolute left-[16.85px] top-[11.88px] w-[115.17px] h-[24.67px] bg-white rounded-[20px]">

                    <div class="absolute flex items-center ml-2">
                        <i class=" w-[17px] h-[15px] text-yellow-600" data-feather="star"></i>
                        <div class="ml-2">
                            <span>4.6</span>
                            <span>(120)</span>
                        </div>
                    </div>

                </div>

                <div
                    class="absolute left-[48.69px] top-[160px] w-[106.75px] h-[36.55px] text-white text-xl font-bold font-Mulish leading-relaxed">
                    0.5 km
                </div>

                <div class="absolute left-[20.28px] top-[165px]">
                    <i data-feather="map-pin" class="text-white "></i>
                </div>

                <div
                    class="absolute left-[16.85px] top-[200px] w-[481.52px] h-[62.73px] text-black text-[20px] font-bold font-Mulish leading-[45.50px]">
                    coto Makassar, sulawesi
                </div>

                <div
                    class="absolute left-[20.60px] top-[230px] w-[168.55px] h-[39.29px] text-zinc-500 text-[20px] font-normal font-Mulish leading-loose">
                    Rp. 25.000
                </div>
            </div>

        </div>
        <div class="aspect-[4/3] relative ">
            <div class="absolute top-0 w-[359px] h-[300px] bg-white rounded-[10px] shadow">
                <img class="absolute left-0 top-0 w-[359px] h-[200px] rounded-[10px]"
                    src="img/menupage/Gado-Gado Menupage.jpeg" />


                <div class="absolute left-[16.85px] top-[11.88px] w-[115.17px] h-[24.67px] bg-white rounded-[20px]">

                    <div class="absolute flex items-center ml-2">
                        <i class=" w-[17px] h-[15px] text-yellow-600" data-feather="star"></i>
                        <div class="ml-2">
                            <span>4.6</span>
                            <span>(120)</span>
                        </div>
                    </div>

                </div>

                <div
                    class="absolute left-[48.69px] top-[160px] w-[106.75px] h-[36.55px] text-white text-xl font-bold font-Mulish leading-relaxed">
                    0.5 km
                </div>

                <div class="absolute left-[20.28px] top-[165px]">
                    <i data-feather="map-pin" class="text-white "></i>
                </div>

                <div
                    class="absolute left-[16.85px] top-[200px] w-[481.52px] h-[62.73px] text-black text-[20px] font-bold font-Mulish leading-[45.50px]">
                    Gado-Gado, Jakarta
                </div>

                <div
                    class="absolute left-[20.60px] top-[230px] w-[168.55px] h-[39.29px] text-zinc-500 text-[20px] font-normal font-Mulish leading-loose">
                    Rp. 10.000
                </div>
            </div>

        </div>
        <div class="aspect-[4/3] relative ">
            <div class="absolute top-0 w-[359px] h-[300px] bg-white rounded-[10px] shadow">
                <img class="absolute left-0 top-0 w-[359px] h-[200px] rounded-[10px]"
                    src="img/menupage/Naniura Menupage.jpeg" />


                <div class="absolute left-[16.85px] top-[11.88px] w-[115.17px] h-[24.67px] bg-white rounded-[20px]">

                    <div class="absolute flex items-center ml-2">
                        <i class=" w-[17px] h-[15px] text-yellow-600" data-feather="star"></i>
                        <div class="ml-2">
                            <span>4.5</span>
                            <span>(120)</span>
                        </div>
                    </div>

                </div>

                <div
                    class="absolute left-[48.69px] top-[160px] w-[106.75px] h-[36.55px] text-white text-xl font-bold font-Mulish leading-relaxed">
                    0.5 km
                </div>

                <div class="absolute left-[20.28px] top-[165px]">
                    <i data-feather="map-pin" class="text-white "></i>
                </div>

                <div
                    class="absolute left-[16.85px] top-[200px] w-[481.52px] h-[62.73px] text-black text-[20px] font-bold font-Mulish leading-[45.50px]">
                    naniura, sumatra utara
                </div>

                <div
                    class="absolute left-[20.60px] top-[230px] w-[168.55px] h-[39.29px] text-zinc-500 text-[20px] font-normal font-Mulish leading-loose">
                    Rp. 35.000
                </div>
            </div>

        </div>

    </div>
     
    <button class="w-[250px] h-[62px] left-[1190px] top-[2000px] absolute bg-[#61AE77]  text-white rounded-[10px]">
        selengkapnya
    </button>

   @endsection