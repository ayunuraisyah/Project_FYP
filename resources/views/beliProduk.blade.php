@extends('layout.templateKategori')
   @section('content')

   <div class=" w-[1000px] h-[100vh] mx-auto">
    <div class="pt-[60px]">
        <h2 class="text-3xl font-bold font-['poppins']">checkout</h2>
        <hr class="w-full h-[10px] text-black">
    </div>

    <div class="w-full h-full -300 mt-[50px]  ">
        <div class="w-[900px] h-[200px] bg-gray-400  mx-auto">
            <div class="flex justify-between pt-6 px-3">
                <div class="flex space-x-2">
                <i data-feather="map-pin"></i>
                <p>Alamat pengiriman</p>
                </div>
                <div class="w-[180px] h-[30px] bg-red-400 flex space-x-2 px-2 items-center justify-center">
                    <i data-feather="plus"></i>
                    <p>Daftar alamat</p>

                </div>

            </div>

            <div class="flex">
            <div class="w-[200px] h-[50px]  ml-[40px] block mt-4">
                <p>Ayu nuraisyah (+62) 812345678</p>

            </div>

            <div class="w-[600px] h-[50px]  ml-[8px] mt-4 block">
                <p>Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461</p>
            </div>

            <div class="flex mt-5 space-x-5 mr-4 ">
            <i data-feather="edit-2"></i>
                <i data-feather="delete"></i>
            </div>


            </div>

            <hr class="w-full h-[20px] flex items-center justify-center mt-5">

          
        </div>

        <div class="w-[900px] h-[600px] bg-gray-500 mx-auto mt-6">
            <table class="ml-8">
                <tr>
                    <td class="w-[30%]">Makanan dipesan</td>
                    <td class="w-[30%]">Harga satuan</td>
                    <td class="w-[30%]">jumlah</td>
                    <td class="w-[30%]">Total harga</td>
                </tr>
                <tr >
                    <td class="flex mt-5"><img src="img/menupage/Rawon Menupage.jpeg" alt="makanan" class="w-[120px] h-[100px]"><p class="ml-6 mt-5">mie titi,<br>makassar</p></td>
                    <td>Rp.24.000</td>
                    <td>2</td>
                    <td>Rp.48.000</td>
                </tr>
            </table>

            <div class="flex mt-6 ml-8 space-x-4">
                <h2>catatan: </h2>
                <div class="w-[160px] h-[30px] bg-slate-200 rounded-[10px]">
                    <p class="text-black pl-2">Tinggalkan pesan</p>

                </div>
            </div>

            <table class="ml-8">
                <tr>
                    <td class="w-[30%]"></td>
                    <td class="w-[30%]"></td>
                    <td class="w-[30%]"></td>
                    <td class="w-[30%]"></td>
                </tr>
            </table>

        </div>

    </div>

   </div>



   


   @endsection