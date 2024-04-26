<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="flex h-screen bg-gray-200">
        <div class="w-64 bg-[#61AE77] h-screen">
            @include('components.headerAdmin')
        </div>

        <div class="flex flex-col flex-1">
            <form action="" class="relative flex items-center mt-3 ml-3">
                <div class="relative flex items-center">
                    <input type="text" placeholder="Cari apa"
                        class="w-[500px] h-[60px] pl-[50px] bg-zinc-300 rounded-[20px] pr-4 placeholder-lg">
                    <i data-feather="search" class="absolute left-0 top-0 mt-5 ml-3 text-gray-400"></i>

                </div>
            </form>
            <div class="p-5 flex-1">
                @yield('content')
            </div>
        </div>
    </div>

    <script>
        feather.replace();
    </script>

</body>

</html>