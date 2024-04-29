<nav class="flex justify-between items-center bg-[#61AE77] h-[90px] px-7">
        <div class="flex items-center">
            <a href="#">
                <i data-feather="menu" class="text-white w-[35px] h-[30px]"></i>
            </a>
            <div class="w-[120px] h-[120px] flex">
                <img src="img/logo1.png" alt="">
            </div>
        </div>
        <div class="flex items-center">
            <a href="/menupage" class="mr-6 text-white">Menu</a>
            <a href="/" class="mr-6 text-white">Home</a>
            <a href="#" class="mr-5">
                <i data-feather="shopping-cart" class=" text-white w-[35px] h-[30px]"></i>
            </a>
            <!-- <a href="#" class="mr-5">
                <i data-feather="bell" class=" text-white w-[35px] h-[30px]"></i>
            </a> -->
            @auth
            
                <a href="/profile" class="mr-6 text-white">Welcome {{ auth()->user()->name }}!</a>

            @else
            
                <a href="/login" class="mr-6 text-white">
                    <p>login</p>
                </a>
            
            @endauth
        </div>
    </nav>