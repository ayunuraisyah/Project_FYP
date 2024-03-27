<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="flex justify-between items-center bg-[#61AE77] h-[90px] px-[50px]">
        <div class="flex items-center">
            <a href="#">
                <i data-feather="menu" class="text-white w-[35px] h-[30px]"></i>
            </a>
            <div class="w-[120px] h-[120px] flex">
                <img src="img/logo1.png" alt="">
            </div>
        </div>

        <form action="" class="flex items-center justify-center flex-grow">
            <div class="relative flex items-center">
                <input type="text" placeholder="Cari apa"
                    class="w-[900px] h-[70px] pl-[50px] bg-zinc-300 rounded-[20px] pr-4 placeholder-lg">
                <i data-feather="search" class="absolute left-0 top-0 mt-6 ml-3 text-gray-400"></i>
            </div>
        </form>

        <div class="flex items-center">
            <div class="flex items-center">
                <a href="#" class="mr-5">
                    <i data-feather="shopping-cart" class=" text-white w-[35px] h-[30px]"></i>
                </a>
                <a href="#" class="mr-5">
                    <i data-feather="bell" class=" text-white w-[35px] h-[30px]"></i>
                </a>
                <a href="#">
                    <img class="w-[50px] h-[50px] rounded-[40px]" src="img/profil.jpg" />
                </a>
            </div>
        </div>
    </nav>

    <div class=" ml-[50px]  absolute text-black text-[30px] font-bold font-['Poppins']">
        Hi Ayu</div>

    <div class="ml-[50px] mt-[50px] absolute text-black text-[30px] font-bold font-['Poppins']">
        Selamat datang di jawa,mau makan apa?</div>



    <div class="mt-[150px] grid p-5 grid-cols-2 gap-2  md:grid-cols-3 md:gap-3
        ">
        <a href="">
            <div class="aspect-[4/3] relative px-6 ">
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
        </a>
        <a href="">
            <div class="aspect-[4/3] relative px-6">
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
        </a>
        <a href="">
            <div class="aspect-[4/3] relative px-6">
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
        </a>
        <a href="">
            <div class="aspect-[4/3] relative px-6">
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
        </a>
        <a href="">
            <div class="aspect-[4/3] relative px-6">
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
        </a>

    </div>

    <button class="w-[250px] h-[62px] absolute bg-[#61AE77] text-white rounded-[10px] right-6">
        Selengkapnya
    </button>


    <footer class="bottom-0 w-full h-[422px] mt-[100px] bg-[#61AE77] relative">
        <img class="w-[331px] h-[331px]" src="img/logo1.png" />
        <div class="w-[1328px] h-[0px] absolute px-[5px] border-2 border-white"></div>
    </footer>



    <script>
        feather.replace();
    </script>
</body>

</html>