<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>

</head>

<body class="w-[1536px] h-[728px] relative bg-[#61AE77] overflow-hidden">
    <div class="relative bg-green-400">
        <div class="w-[526px] h-[562px] left-[493px] top-[119px] absolute bg-white rounded-[50px]">
            <p class="text-green-900 text-[32px] font-bold font-['Poppins'] flex item-center justify-center mt-6">
                Welcome To FYP!
            </p>
            <p class=" text-black text-[13px] font-bold font-['Poppins'] flex item-center justify-center">
                Sign-up to continue
            </p>


            <form action="/registrasi" class="flex flex-col items-center mt-[30px] " method="post">
                @csrf
                <div class="mr-4 mb-4">
                    <input type="text" placeholder="Name" id="username" name="nama" value="{{ old('nama') }}"
                        class="w-[327px] h-12 bg-black bg-opacity-20 rounded-[10px]  pl-4">
                </div>

                <div class="mr-4 mb-4 relative">
                    <input type="date" placeholder="DD/MM/YYY" id="tgl_lahir" name="tanggal" value="{{ old('tanggal') }}"
                        class="w-[327px] h-12 bg-black bg-opacity-20 rounded-[10px] pl-4 pr-10">

                    {{-- <i data-feather="calendar" class="absolute inset-y-0 right-0 m-auto mr-3"></i> --}}

                </div>
                <div class="mr-4 mb-4">
                    <input type="text" placeholder="Email" id="Email" name="email" value="{{ old('email') }}"
                        class="w-[327px] h-12 bg-black bg-opacity-20 rounded-[10px]  pl-4">
                </div>
                <div class="mr-4 mb-4">
                    <input type="password" placeholder="password" id="password" name="sandi"
                        class="w-[327px] h-12 bg-black bg-opacity-20 rounded-[10px]  pl-4">
                </div>
                <div class="mr-4">
                    <input type="password" placeholder="Re-password" id="Re-password" name="resandi"
                        class="w-[327px] h-12 bg-black bg-opacity-20 rounded-[10px]  pl-4">
                </div>

                <div class="mt-4 ">
                    <button class="w-[182px] h-12 rounded-[10px] bg-[#07511B]">Sign-up</button>
                </div>
            </form>


            <div class="mt-4 text-center">
                <p class="text-sm font-medium text-gray-900">Don't have an account? <a href="#"
                        class="text-indigo-600 hover:text-indigo-500">Sign-up</a></p>
            </div>
        </div>


    </div>

    <script>
        feather.replace();
    </script>
</body>

</html>