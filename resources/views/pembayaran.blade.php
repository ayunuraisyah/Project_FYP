<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
<body class ="justify-center flex items-center h-screen">
<div class = "w-[700px] h-[800px] mx-auto">
<div class ="pt-6">
<h2 class ="ml-8">Pembayaran</h2>
<div class ="w-full h-1 bg-white flex items-center">
            </div>
            <div class ="w-full h-[700px] border border-green-500 mt-7">
<div class ="w-[90%] h-[80%] bg-gray-400">
<div class="w-[90%] h-[30px] bg-red-300 mx-auto justify-between flex">
    <h2>Total pembayaran</h2>
    <h2>Rp. {{ number_format($totalHarga) }}</h2>
   
    </div>
    <div class ="w-[90%] h-1 bg-white mx-auto">
<div class ="">

</div>
</div>
</div>
            </div>
</div>
</div>
<script>
        feather.replace();
    </script>
</body>
</html>