

<nav class="flex justify-between items-center bg-[#61AE77] h-[90px] px-7">
        <div class="flex items-center">
           
            <a href="#" class="md:hidden" id="menu-toggle">
                <i data-feather="menu" class="text-white w-[35px] h-[30px]"></i>
            </a>
            
            <div class="flex w-[120px] h-[120px]">
                <img src="/img/logo1.png" alt="Logo">
            </div>
        </div>
        <div class="flex items-center Navbarnav"> 
            <a href="/menupage" class="mr-6 text-white">Menu</a>
            <a href="/" class="mr-6 text-white">Home</a>
            <a href="/cart" class="mr-5">
                <i data-feather="shopping-cart" class="text-white w-[35px] h-[30px]"></i>
            </a>
           
            @auth
                <a href="/profil" class="mr-6 text-white">Welcome {{ auth()->user()->name }}!</a>
            @else
                <a href="/login" class="mr-6 text-white">
                    <p>Login</p>
                </a>
            @endauth
        </div>
    </nav>

    
    <div id="overlay" class="fixed inset-0 bg-black overlay"></div>

<div id="sidebar" class="fixed inset-y-0 left-0 bg-[#61AE77] w-[250px] sidebar sidebar-closed md:hidden">
<div class="flex flex-col p-6 relatve">
    <a href="#" id="close-sidebar" class="absolute top-2 right-2 text-white">
        <i data-feather="x" class="text-white w-[35px] h-[30px]"></i>
    </a>
    <div class="w-[150px] h-[150px] mb-4">
        <img src="/img/logo1.png" alt="Logo">
    </div class="py-3">
    <a href="/menupage" class="mb-4 text-white">Menu</a>
    <a href="/" class="mb-4 text-white">Home</a>
    <a href="/cart" class="mb-4 text-white">
        <i data-feather="shopping-cart" class="text-white w-[35px] h-[30px]"></i>
    </a>
    @auth
        <a href="/profil" class="mb-4 text-white">Welcome {{ auth()->user()->name }}!</a>
        <div class="">
            <i data-feather="user" class="w-[27px] h-[34px] text-white"></i>
            <a href="/profil" class="text-3xl text-white">Profil</a>
        </div>
    
        <div class="">
            <i data-feather="shopping-cart" class="w-[27px] h-[34px] text-white"></i>
            <a href="/cart" class="text-3xl text-white">Keranjang</a>
       </div>
    
        <div class="">
            <i data-feather="star" class="w-[27px] h-[34px] text-white"></i>
            <a href="/profile/favorite" class="text-3xl text-white">Favorit</a>
       </div>
    
        <div class="">
            <i data-feather="activity" class="w-[27px] h-[34px] text-white"></i>
            <a href="/profile/status" class="text-3xl text-white">Status</a>
       </div>
    
        @if(auth()->user()->role == 'admin')
            <div class="">
                <i data-feather="codepen" class="w-[27px] h-[34px] text-white"></i>
                <a href="/admin" class="text-3xl text-white">admin</a>
            </div>
        @endif
    
        <div class="">
            <i data-feather="log-out" class="w-[27px] h-[34px] text-white"></i>
            <a href="/logout" class="text-3xl text-white">Logout</a>
        </div>
    @else
        <a href="/login" class="mb-4 text-white">
            <p>Login</p>
        </a>
    @endauth
</div>
</div>
