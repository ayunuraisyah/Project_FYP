@extends('layout.adminPage')

@section('content')
<div class="flex items-center justify-center">
    <div class="max-w-lg w-full rounded-lg bg-green-500 p-5">
        <h1 class="text-white text-3xl font-bold font-poppins text-center mb-4">Tambah Makanan</h1>

        <form action="/admin" method="post" class="mt-2" enctype="multipart/form-data">
            @csrf
            <div class="">
                <input type="text" placeholder="Nama makanan" name="title" id="title"
                    class="w-full h-12 rounded-lg pl-3 bg-black bg-opacity-20 placeholder-white text-white focus:outline-none focus:bg-opacity-30">
            </div>
            <select name="origin" id="Daerah"
                class="w-full h-12 rounded-lg mt-3 text-white bg-black bg-opacity-20 focus:outline-none focus:bg-opacity-30 "
                style="text-indent: 5px;">
                <option value="">Daerah Makanan</option>
                <option value="Jawa">Jawa</option>
                <option value="Sumatra">Sumatra</option>
                <option value="Kalimantan">Kalimantan</option>
                <option value="Sulawesi">Sulawesi</option>
                <option value="Bali">Bali</option>
            </select>
            <div class=" mt-3">
                <input type="number" name="price" id="Harga"
                    class="w-full h-12 rounded-lg pl-3 bg-black bg-opacity-20 placeholder-white text-white focus:outline-none focus:bg-opacity-30"
                    placeholder="Harga">
            </div>
            <input type="number" name="stock" id="Stock" placeholder="Stock"
                class="w-full h-12 rounded-lg pl-3 bg-black bg-opacity-20 placeholder-white text-white focus:outline-none focus:bg-opacity-30 mt-3">
            <div class=" mt-3">
                <input id="x" type="hidden" name="description">
                <trix-editor input="x" class="w-full bg-black bg-opacity-20 border-0 text-white"></trix-editor>
            </div>
            <input type="hidden" name="favorite" value="0">
            <input type="hidden" name="sold" value="0">
            <div class=" mt-3">
                <label for="Gambar"
                    class="block text-sm font-medium text-gray-700 text-center mb-1">Pilih Gambar</label>
                <div class="flex items-center justify-center">
                    <input type="file" id="Gambar" name="thumbnail" accept="image/*"
                        class="sr-only bg-black bg-opacity-20 text-white">
                    <label for="Gambar"
                        class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-900 hover:bg-indigo-700 cursor-pointer mb-2 w-32 text-center mx-auto">
                        Pilih File
                    </label>
                </div>
                <button
                    class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-900 hover:bg-indigo-700 cursor-pointer mt-2 w-full text-center">
                    Masukkan Barang
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
