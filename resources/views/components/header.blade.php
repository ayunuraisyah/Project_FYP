

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

    
    <div id="sidebar" class="fixed top-0 left-0 w-64 h-full bg-[#61AE77] sidebar sidebar-hidden md:hidden">
        <div class="p-4 flex flex-col h-full">
            <div class="flex justify-between items-center">
                <h2 class="text-white text-2xl">Menu</h2>
                <a href="#" id="menu-close">
                    <i data-feather="x" class="text-white w-[35px] h-[30px]"></i>
                </a>
            </div>
           
            <div class="w-full h-[120px] flex justify-center items-center mt-4">
                <img src="img/logo1.png" alt="Logo">
            </div>
            <a href="/menupage" class="mt-6 text-white">Menu</a>
            <a href="/" class="mt-6 text-white">Home</a>
            <a href="/cart" class="mt-6 text-white">
                <i data-feather="shopping-cart" class="text-white w-[35px] h-[30px]"></i>
            </a>
            @auth
                <a href="/profil" class="mt-6 text-white">Welcome {{ auth()->user()->name }}!</a>
            @else
                <a href="/login" class="mt-6 text-white">Login</a>
            @endauth
        </div>
    </div>

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            feather.replace();

            const menuToggle = document.getElementById('menu-toggle');
            const menuClose = document.getElementById('menu-close');
            const sidebar = document.getElementById('sidebar');

            menuToggle.addEventListener('click', function() {
                sidebar.classList.toggle('sidebar-hidden');
                sidebar.classList.toggle('sidebar-visible');
            });

            menuClose.addEventListener('click', function() {
                sidebar.classList.toggle('sidebar-hidden');
                sidebar.classList.toggle('sidebar-visible');
            });
        });
    </script>