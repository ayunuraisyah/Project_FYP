<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="relative bg-cover bg-center bg-no-repeat  overflow-hidden"
    style="background-image: url('../img\logo1.png');">

    <div class="w-[598px] h-[575px] left-[513px] top-[85px] absolute bg-green-400 rounded-[50px]">

        <div class="w-[244px] h-30 mx-auto">
        <img src="{{ ('../img/logo1.png') }}" >
        </div>

        <form action="" class="flex flex-col items-center mt-[5px] ">
            <div class="mr-4 mb-4">
                <input type="text" placeholder="Name" id="username"
                    class="w-[327px] h-12 bg-black bg-opacity-20 rounded-[10px]  pl-4 placeholder-white">
            </div>

            <div class="mr-4 mb-4">
                <input type="password" placeholder="password" id="password"
                    class="w-[327px] h-12 bg-black bg-opacity-20 rounded-[10px]  pl-4 placeholder-white">
            </div>

            <div class="text-black text-sm font-normal font-['Poppins'] mr-[245px] mt-2">
                <p> Forgot password?</p>
            </div>

            <div class="mt-4 ">
                <button class="w-[182px] h-12 rounded-[10px] bg-[#07511B]">login</button>
            </div>

        </form>

        <div class="mt-4 text-center">
            <p class="text-sm font-medium text-gray-900">Don't have an account? <a href="/registrasi"
                    class="text-indigo-600 hover:text-indigo-500">Sign-up</a></p>
        </div>

    </div>

    <script>
        feather.replace();
    </script>
</body>

</html>