<nav class="flex justify-between items-center bg-[#61AE77] h-[90px] px-7">
    <div class="flex items-center">
        <a href="#" class="md:hidden" id="menu-toggle">
            <i data-feather="menu" class="text-white w-[35px] h-[30px]"></i>
        </a>
        <div class="hidden md:flex w-[120px] h-[120px]">
            <img src="/img/logo1.png" alt="Logo">
        </div>
    </div>
    <div class="hidden md:flex items-center"> 
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
    <div class="flex flex-col p-6 relative">
        <!-- Close Sidebar Button -->
        <a href="#" id="close-sidebar" class="absolute top-2 right-2 text-white">
            <i data-feather="x" class="text-white w-7 h-7"></i>
        </a>
        <!-- Logo -->
        <div class="w-[170px] h-[150px] mb-6">
            <img src="/img/logo1.png" alt="Logo" class="object-cover h-full">
        </div>
        <!-- Sidebar Links -->
        <div class="flex flex-col space-y-6">
            @auth
            <a href="/profil" class="text-xl text-white">Welcome {{ auth()->user()->name }}!</a>
            @else
            <a href="/login" class="text-white text-xl">Login</a>
            @endauth
            <a href="/" class="text-white text-xl">Home</a>
            <a href="/menupage" class="text-white text-xl">Menu</a>
            <a href="/cart" class="text-white text-xl flex items-center space-x-2">
                <i data-feather="shopping-cart" class="w-[27px] h-[34px]"></i>
                <p>Keranjang</p>
            </a>
           
            <a href="/profile/favorite" class="text-xl text-white flex items-center space-x-2">
                <i data-feather="star" class="w-[27px] h-[34px]"></i>
                <p>Favorit</p>
            </a>
            <a href="/profile/status" class="text-xl text-white flex items-center space-x-2">
                <i data-feather="activity" class="w-[27px] h-[34px]"></i>
                <p>Status</p>
            </a>
            @if(auth()->user()->role == 'admin')
            <a href="/admin" class="text-xl text-white flex items-center space-x-2">
                <i data-feather="codepen" class="w-[27px] h-[34px]"></i>
                <p>Admin</p>
            </a>
            @endif
            <a href="/logout" class="text-xl text-[#61AE77] flex items-center space-x-2">
                <i data-feather="log-out" class="w-[27px] h-[34px] text-[#61AE77]"></i>
                <p>Logout</p>
            </a>
        </div>
    </div>
</div>
