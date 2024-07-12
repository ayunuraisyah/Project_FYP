<nav class="flex justify-between items-center bg-[#61AE77] h-[75px] px-7">
    <div class="flex items-center">
        <a href="#" class="md:hidden" id="menu-toggle">
            <i data-feather="menu" class="text-white w-[35px] h-[30px]"></i>
        </a>
        <div class="hidden md:hidden  w-[120px] h-[120px]">
            <img src="/img/logo1.png" alt="Logo">
        </div>
    </div>
    <div class="hidden md:hidden items-center"> 
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
<div class="flex justify-center">
    <a href="/"><img src="/img/logo1.png" alt="" class="w-[200px] h-[200px]"></a>
</div>
<a href="#" id="close-sidebar" class="absolute top-2 right-2 text-white">
            <i data-feather="x" class="text-white w-7 h-7"></i>
        </a>

<nav class="mt-2">
    <a href="/admin" class="block px-4 py-2 text-sm text-white hover:bg-gray-700">Dashboard</a>
    <a href="/status"
        class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 text-white">Status pembelian</a>
    <a href="/adminBarang" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 text-white">Mengatur barang</a>
    <a href="/datapengguna" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 text-white">Data pengguna</a>
    <a href="/logout" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 text-white">log out</a>
</nav>
</div>
