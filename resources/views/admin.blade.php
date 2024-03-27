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
            <div class="w-[200px] h-[200px] flex items-center">
                <img src="img/logo1.png" alt="">
            </div>

            <nav class="mt-2">
                <a href="#" class="block px-4 py-2 text-sm text-white bg-green-900">Dashboard</a>
                <a href="#"
                    class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Pembelian</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">log out</a>
            </nav>
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
                <div class="w-[500px] h-[650px] rounded-[10px] bg-green-500 text-center">
                    <p class="text-white text-[20px] font-bold font-[poppins]">Tambah Makanan</p>

                    <form action="" class="mt-5" method="post">
                        <div>
                            <input type="text" placeholder="Nama makanan" name="Nama-Makanan" id="Nama-Makanan"
                                class="w-[350px] h-[40px] rounded-[10px] pl-3 bg-black bg-opacity-20 placeholder-white">
                        </div>
                        <select name="Daerah" id="Daerah"
                            class="w-[350px] h-[40px] rounded-[10px] mt-2 text-white bg-black bg-opacity-20"
                            style="text-indent: 5px;">
                            <option value="">daerah Makanan</option>
                            <option value="">Jawa</option>
                            <option value="">Sumatra</option>
                            <option value="">Kalimantan</option>
                            <option value="">Sulawesi</option>
                            <option value="">bali</option>
                        </select>
                        <div class="mt-2">
                            <input type="number" name="Harga" id="Harga"
                                class="w-[350px] h-[40px] rounded-[10px] pl-3 bg-black bg-opacity-20 placeholder-white"
                                placeholder="Harga">
                        </div>
                        <select name="Stok" id="Stok"
                            class="w-[350px] h-[40px] rounded-[10px] mt-2 text-white bg-black bg-opacity-20"
                            style="text-indent: 5px;">
                            <option value="">Stok</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            <option value="">6</option>
                            <option value="">7</option>
                            <option value="">8</option>
                            <option value="">9</option>
                            <option value="">10</option>
                        </select>
                        <div class="mt-2">
                            <textarea name="Deskripsi" id="Deskripsi" cols="30" rows="10" placeholder="deskripsi makanan" required class="w-[350px] h-[150px]  bg-black bg-opacity-20  placeholder-white">

                            </textarea>
                        </div>
                        <div class="mt-2">
                            <label for="Gambar" class="block text-sm font-medium text-gray-700">Pilih Gambar</label>
                            <div class="mt-1 flex flex-col items-center justify-center">

                                <input type="file" id="Gambar" name="Gambar" accept="image/*"
                                    class="sr-only bg-black bg-opacity-20 text-white">
                                <label for="Gambar"
                                    class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-900 hover:bg-indigo-700 cursor-pointer mb-2">
                                    Pilih File
                                </label>
                                <span class="h-[150px] w-[250px] rounded-[15px] overflow-hidden bg-gray-100 mb-2">
                                    <img id="preview" src="" alt="" class="h-full w-full">
                                </span>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        feather.replace();
    </script>

</body>

</html>