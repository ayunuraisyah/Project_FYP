@extends('layout.dashboard2')
   @section('content')

   <div class="w-[1000px] h-[100vh] mx-auto">
    <div class="pt-[60px]">
        <h2 class="text-3xl font-bold font-['poppins'] ml-[50px]">checkout</h2>
        <div class="w-[95%] h-[2px] bg-black mx-auto">

</div>
    </div>

    <div class="w-full h-[1000px] mt-[50px]">
        <div class="w-[900px] h-[200px] bg-[#D9D9D9] mx-auto">
            <div class="flex justify-between pt-6 px-3">
                <div class="flex space-x-2">
                    <i data-feather="map-pin"></i>
                    <p>Alamat pengiriman</p>
                </div>
                
            </div>

            <div class="flex">
                <div class="w-[200px] h-[50px] ml-[40px] block mt-4">
                    <p>{{ auth()->user()->name }}</p>
                </div>
                <div class="w-[600px] h-[50px] ml-[8px] mt-4 block">
                    <p>{{ auth()->user()->address }}</p>
                </div>
                <div class="flex mt-5 space-x-5 mr-4">
                    <i data-feather="edit-2"></i>
                </div>
            </div>

            <hr class="w-full h-[20px] flex items-center justify-center mt-5">
        </div>

        <div class="w-[900px] h-[374px] bg-[#D9D9D9] mx-auto mt-6">
            <table class="ml-6">
                <tr class="">
                    <td class="w-[30%] pt-6">Makanan di pesan</td>
                    <td class="w-[30%] pt-6">Harga satuan</td>
                    <td class="w-[30%] pt-6">jumlah</td>
                    <td class="w-[30%] pt-6">Total harga</td>
                </tr>
                @foreach ($dataCarts as $index => $cart)
                    <tr>
                        <td class="flex mt-4"><img src="/storage/{{ $dataItems[$index]->thumbnail }}" alt="" class="w-[130px] h-[100px]"><p class="ml-6 mt-6">{{ $dataItems[$index]->title }},<br>{{ $dataItems[$index]->origin }}</p></td>
                        <td class="pl-2">Rp {{ number_format($dataItems[$index]->price) }}</td>
                        <td class="pl-2">{{ $cart->qty }}</td>
                        <td class="pl-2">Rp {{ number_format($cart->qty * $dataItems[$index]->price) }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td class="flex mt-4">catatan:
                        <input type="text" name="note" id="note" placeholder="note" class="bg-[#A5A5A5] rounded-[10px] ml-6">
                    </td>
                </tr>
                <tr>
                    <td class="pt-5">opsi pengiriman:</td>
                    <td class="cols-span-1 pt-5 font-bold">reguler <span class="ml-14 text-[#07511B]">ubah</span><br><p  class="text-sm ">Akan di terima 24 menit</p></td>
                    <td></td>
                    <td class="pt-5">Rp {{ number_format($totalHarga) }}</td>
                </tr>
            </table>
            <div class="w-[95%] h-[2px] bg-black mx-auto mt-6">
                <table>
                    <tr>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                    </tr>
                    <tr>
                    <td colspan="3" class="border-b"></td>
                    <td colspan="1" class="pt-6 text-right w-[100%] font-bold">Total Pesanan ({{ $totalItem }} Makanan): <span class="ml-[70px] mr-[50px] text-[#07511B]">Rp. {{ number_format($totalHarga) }}</span></td>
                    </tr>
                </table>

</div>

</div>

        <div class="w-[900px] h-[550px] bg-[#D9D9D9] mx-auto mt-6">
            <div class="w-[600px] h-[100px]  items-center flex justify-between">

            <div class="pl-[50px]">
                <h2>metode pembayaran</h2>
            </div>

            <div class="w-[100px] h-[50px] bg-[#A5A5A5]  text-center flex items-center justify-center rounded-[10px]">
                <p class="text-white font-bold">COD</p>
            </div>

            <div class="w-[160px] h-[50px] bg-[#07511B] flex items-center justify-center rounded-[10px]">
                <p class="text-white font-bold">Transfer bank</p>
            </div>

            </div>

            <div class="w-[95%] h-[2px] bg-black mx-auto">

            </div>

            <div class="w-[350px] h-[100px]  items-center flex justify-between">
                <div class="pl-[50px]">
                    <h2>pilih bank:</h2>
                </div>

                <div>
                    <input type="checkbox">
                </div>

                <div class="w-[50px] h-[50px] border border-green-600 flex items-center justify-center">
                    <img src="/img/bank.jpeg" alt="" class="w-[35px] h-[35px]">
                </div>

                <div>
                    <h2>Bank BNI</h2>
                </div>
            </div>

            <div class="w-[95%] h-[2px] bg-black mx-auto">

            </div>

            <div class="w-full h-[200px]  flex justify-end mt-5">
                <div class="w-[260px] h-[170px]  mr-6">
                    <div class="flex justify-between">
                        <h2>Subtotal makanan:</h2>
                        <h2>Rp.48.000</h2>
                    </div>
                    <div class="flex justify-between mt-3">
                        <h2>Total Ongkos Kirim:</h2>
                        <h2>Rp.10.000</h2>
                    </div>
                    <div class="flex justify-between mt-3">
                        <h2>Biaya Pelayanan:</h2>
                        <h2>Rp.10.000</h2>
                    </div>
                    <div class="flex justify-between mt-3">
                        <h2>Total Pembayaran:</h2>
                        <h2  class="text-xl text-[#07511B] font-bold">Rp.59.000</h2>
                    </div>

                </div>

                

               

            </div>

            <div class="w-full h-[100px]  flex justify-end ">
                <button class="w-[190px] h-[60px] bg-[#07511B] mr-6 text-white" >buat pesanan</button>

                
            </div>

            <div class="w-[95%] h-[2px] bg-black mx-auto">

</div>
            
            
        </div>
    </div>
</div>

@endsection
