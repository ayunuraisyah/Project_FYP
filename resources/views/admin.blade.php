
@extends('layout.adminPage')

@section('content')
                <div class="w-[500px] h-[650px] rounded-[10px] bg-green-500 text-center">
                    <p class="text-white text-[20px] font-bold font-[poppins]">Tambah Makanan</p>

                    <form action="/admin" method="post" class="mt-5" method="post">
                        <div>
                            <input type="text" placeholder="Nama makanan" name="namaMakanan" id="Nama-Makanan"
                                class="w-[350px] h-[40px] rounded-[10px] pl-3 bg-black bg-opacity-20 placeholder-white">
                        </div>
                        <select name="daerah" id="Daerah"
                            class="w-[350px] h-[40px] rounded-[10px] mt-2 text-white bg-black bg-opacity-20"
                            style="text-indent: 5px;">
                            <option value="">daerah Makanan</option>
                            <option value="Jawa">Jawa</option>
                            <option value="Sumatra">Sumatra</option>
                            <option value="Kalimantan">Kalimantan</option>
                            <option value="Sulawesi">Sulawesi</option>
                            <option value="bali">bali</option>
                        </select>
                        <div class="mt-2">
                            <input type="number" name="harga" id="Harga"
                                class="w-[350px] h-[40px] rounded-[10px] pl-3 bg-black bg-opacity-20 placeholder-white"
                                placeholder="Harga">
                        </div>
                        <input type="number" name="stock" id="" placeholder="stock" class="mt-2 w-[350px] h-[40px] rounded-[10px] pl-3 bg-black bg-opacity-20 placeholder-white">
                        <div class="mt-2">
                            <textarea name="deskripsi" id="Deskripsi" cols="30" rows="10" value="deskripsi makanan" required class="w-[350px] h-[150px]  bg-black bg-opacity-20 "></textarea>
                        </div>
                        <div class="mt-2">
                            <label for="Gambar" class="block text-sm font-medium text-gray-700">Pilih Gambar</label>
                            <div class="mt-1 flex flex-col items-center justify-center">

                                <input type="file" id="Gambar" name="gambar" accept="image/*"
                                    class="sr-only bg-black bg-opacity-20 text-white">
                                <label for="Gambar"
                                    class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-900 hover:bg-indigo-700 cursor-pointer mb-2">
                                    Pilih File
                                </label>
                                <button class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-900 hover:bg-indigo-700 cursor-pointer mb-2">Masukkan Barang</button>
                            </div>
                        </div>
                    </form>
                </div>
@endsection