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
        <div class="w-[170px] h-[150px] mb-4">
            <img src="/img/logo1.png" alt="Logo" class="object-cover h-full">
        </div>
        <!-- Sidebar Links -->
        <div class="py-3 flex flex-col space-y-4">
            <a href="/menupage" class="text-white">Menu</a>
            <a href="/" class="text-white">Home</a>
            <a href="/cart" class="text-white">
                <i data-feather="shopping-cart" class="text-white w-7 h-7"></i>
            </a>
            @auth
                <a href="/profil" class="text-white">Welcome {{ auth()->user()->name }}!</a>
            @else
                <a href="/login" class="text-white">Login</a>
            @endauth
        </div>
    </div>
</div>
