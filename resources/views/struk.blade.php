@extends('layout.dashboard2')
   @section('content')

   <div class="w-[700px] h-[760px] mx-auto">
    <div class="pt-6">
        <h2 class="text-black text-3xl font-bold ml-6">struk pembayaran</h2>
        <div class="w-full h-[2px] bg-black"></div>
    </div>

    <div class="w-full  border border-green-700 mt-10  flex items-center justify-center rounded-[13px]">
    <div class="w-[95%]  bg-[#D9D9D9] my-3">
        <h2 class="text-center mt-3 text-2xl font-bold">For Your Plate</h2>
        <div class="flex items-center justify-center mt-2 space-x-3">
        <p>Monday</p>
        <p>7/8/2024</p>
        <p>11:25 PM</p>
        </div>

        <div class="w-[80%] h-[2px] bg-black mx-auto mt-6"></div>

        <div class="w-[80%]  mx-auto justify-between flex mt-3">
            <h2>1.Nasi goreng</h2>
            <h2>Rp20.000</h2>
        </div>
        <div class="w-[80%]  mx-auto justify-between flex mt-3">
            <h2>2.Rawon</h2>
            <h2>Rp15.000</h2>
        </div>
        <div class="w-[80%]  mx-auto justify-between flex mt-3">
            <h2>3.soto</h2>
            <h2>Rp17.000</h2>
        </div>

        <div class="w-[80%] h-[2px] bg-black mx-auto mt-6"></div>
        <div class="w-[80%]  mx-auto justify-between flex mt-3">
            <h2>Ongkir</h2>
            <h2>Rp10.000</h2>
        </div>
        <div class="w-[80%]  mx-auto justify-between flex mt-3 font-bold text-xl">
            <h2>Total</h2>
            <h2 class="">Rp17.000</h2>
        </div>

        
        <div class="w-[80%] h-[2px] bg-black mx-auto mt-6"></div>
        <h2 class="text-center text-xl mt-3 mb-4">Thank you</h2>
       
</div>
</div>

   @endsection