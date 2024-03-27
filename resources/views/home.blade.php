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
        href="https://fonts.googleapis.com/css2?family=Lalezar&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="overflow-x-hidden">
    <nav class="flex justify-between items-center bg-[#61AE77] h-[90px] px-5">
        <div class="flex items-center">
            <a href="#">
                <i data-feather="menu" class="text-white w-[35px] h-[30px]"></i>
            </a>
            <div class="w-[120px] h-[120px] flex">
                <img src="img/logo1.png" alt="">
            </div>
        </div>
        <div class="flex items-center">
            <a href="" class="mr-6 text-white">Menu</a>
            <a href="" class="mr-6 text-white">Home</a>
            <a href="" class="mr-6"><i data-feather="shopping-cart" class="text-white "></i></a>
            <a href="" class="mr-6"><i data-feather="user" class="text-white "></i></a>
            <a href="" class="mr-6"><i data-feather="bell" class="text-white "></i></a>
            <a href="" class="text-white">Login</a>
        </div>


    </nav>


    <div class="relative w-full overflow-hidden bg-">
        <img src="img/bg-home/Bg Home.jpeg" alt="" class="w-full h-full object-cover">
        <div class="absolute inset-0 flex items-center justify-center flex-col text-center text-white">
            <p class="text-[70px] font-bold font-'Lalezar'">RAGAM MENU PILIHAN</p>
            <p class="w-[510px] h-[0px] border-[3px] border-white mt-3"></p>
            <a href=""> <button
                    class="bg-[#61AE77] w-[225px] h-[75px] rounded-[10px] mt-[30px]">selengkapnya</button></a>

        </div>
    </div>

    <div class="relative w-full h-[450px] bg-[#61AE77]">
        <div class="grid grid-cols-1 gap-1 md:grid-cols-3 md:gap-3 justify-items-center">
            <div class=" w-[220px] h-[220px] flex flex-col justify-center items-center mt-[50px]">
                <div class="w-[300px] h-[400px] p-5 flex flex-col items-center">
                    <div
                        class="relative w-[200px] h-[200px] bg-green-900 rounded-full flex justify-center items-center">
                        <img class="w-[150px] h-[150px] rounded-full shadow" src="img/Icon Terfav.jpeg" />
                    </div>
                    <h2 class="mt-2 text-white text-[30px] font-normal font-['Lalezar']">terfavorit</h2>
                </div>
            </div>
            <div class=" w-[220px] h-[220px] flex flex-col justify-center items-center mt-[50px]">
                <div class="w-[300px] h-[400px] p-5 flex flex-col items-center">
                    <div
                        class="relative w-[200px] h-[200px] bg-green-900 rounded-full flex justify-center items-center">
                        <img class="w-[150px] h-[150px] rounded-full shadow" src="img/Icon Terlaris.jpeg" />
                    </div>
                    <h2 class="mt-2 text-white text-[30px] font-normal font-['Lalezar']">Terlaris</h2>
                </div>
            </div>
            <div class=" w-[220px] h-[220px] flex flex-col justify-center items-center mt-[50px]">
                <div class="w-[300px] h-[400px] p-5 flex flex-col items-center">
                    <div
                        class="relative w-[200px] h-[200px] bg-green-900 rounded-full flex justify-center items-center">
                        <img class="w-[150px] h-[150px] rounded-full shadow" src="img/Icon Ekstra Diskon.jpeg" />
                    </div>
                    <h2 class="mt-2 text-white text-[30px] font-normal font-['Lalezar']">Ekstra diskon</h2>
                </div>
            </div>




        </div>
        <div class="absolute  left-1/2 transform -translate-x-1/2 mt-[60px] w-[1300px] h-[0px] border-2 border-white">
        </div>


    </div>





    <script>
        feather.replace();
    </script>

</body>

</html>