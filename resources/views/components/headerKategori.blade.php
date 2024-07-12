<nav class="flex justify-between items-center bg-[#61AE77] h-[90px] px-[50px]">
        <div class="flex items-center">
            <a href="#" class="md:hidden" id="menu-toggle">
                <i data-feather="menu" class="text-white w-[35px] h-[30px]"></i>
            </a>
            <div class="hidden w-[120px] h-[120px] md:flex">
                <img src="/img/logo1.png" alt="">
            </div>
        </div>

        @isset($origin)

            <form action="{{ route('user.searchKategori', $origin) }}" method="post" class="hidden md:flex items-center justify-center flex-grow">
                @csrf
                <div class="relative flex items-center">
                    <input type="text" placeholder="Cari apa" name="query"
                        class="w-[900px] h-[70px] pl-[50px] bg-zinc-300 rounded-[20px] pr-4 placeholder-lg">
                        <i data-feather="search" class="absolute left-0 top-0 mt-6 ml-3 text-gray-400"></i>
                        <input type="hidden" name="origin" id="origin" value="{{ $origin }}">
                </div>
            </form>
        @endisset

        <div class="hidden md:flex items-center">
            <div class="flex items-center">
                <a href="/cart" class="mr-5">
                    <i data-feather="shopping-cart" class=" text-white w-[35px] h-[30px]"></i>
                </a>
                <a href="/profile/favorite" class="mr-5">
                    <i data-feather="star" class=" text-white w-[35px] h-[30px]"></i>
                </a>
                @auth
            <a href="/profil" class="mr-6 text-white">Welcome {{ auth()->user()->name }}!</a>
        @else
            <a href="/login" class="mr-6 text-white">
                <p>login</p>
            </a>
        @endauth
            </div>
        </div>
    </nav>


    <div id="overlay" class="fixed inset-0 bg-black overlay"></div>

    <div id="sidebar" class="fixed inset-y-0 left-0 bg-[#61AE77] w-[250px] sidebar sidebar-closed md:hidden">
    <div class="flex flex-col h-screen">
        <!-- Close Sidebar Button -->
        <a href="#" id="close-sidebar" class="absolute top-2 right-2 text-white">
            <i data-feather="x" class="text-white w-7 h-7"></i>
        </a>
        <!-- Logo -->
        <div class="w-[170px] h-[150px]  mt-3">
            <img src="/img/logo1.png" alt="Logo" class="object-cover h-full">
        </div>
        <!-- Sidebar Links -->
        <div class="py-3 flex flex-col space-y-4">
            @isset($origin)
                <form action="{{ route('user.searchKategori', $origin) }}" method="post" class="flex items-center justify-center">
                    @csrf
                    <div class="relative flex items-center">
                        <input type="text" placeholder="Cari apa" name="query"
                            class="w-full h-10 px-3 bg-zinc-300 rounded-[10px] text-sm placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-300">
                        <button type="submit" class="absolute right-0 top-0 mr-2 mt-2">
                            <i data-feather="search" class="text-gray-400 w-5 h-5"></i>
                        </button>
                        <input type="hidden" name="origin" id="origin" value="{{ $origin }}">
                    </div>
                </form>
            @endisset
            <a href="/cart" class="flex items-center text-white ml-8">
                <i data-feather="shopping-cart" class="w-5 h-5 mr-2"></i>
                Cart
            </a>
            <a href="/profile/favorite" class="flex items-center text-white ml-8">
                <i data-feather="star" class="w-5 h-5 mr-2"></i>
                Favorites
            </a>
            @auth
                <a href="/profil" class="flex items-center text-white ml-8">
                    <i data-feather="user" class="w-5 h-5 mr-2"></i>
                    Welcome {{ auth()->user()->name }}!
                </a>
            @else
                <a href="/login" class="flex items-center text-white ml-8">
                    <i data-feather="log-in" class="w-5 h-5 mr-2"></i>
                    Login
                </a>
            @endauth
        </div>
    </div>
</div>
