@extends('layout.dashboard2')
   @section('content')

   <div class="flex items-center justify-center mt-[30px] space-x-8 ">

    <div class="w-[500px] h-[510px] bg-green-500 rounded-[10px]">
        <h2 class="text-center text-white mt-3">INPUT PEMBAYARAN</h2>

        <form action="">
            <div class=" grid grid-cols-2 mx-4 mt-3">
              <div>
                 <p class="text-white">Nama</p>
                 <input type="text" class="width-[36px] h-[20px]">
              </div>
              <div>
                 <p class="text-white">kode pos</p>
                 <input type="text" class="width-[30px] h-[20px]"> 
              </div>
              <div>
                 <p class="text-white">No hp</p>
                 <input type="text" class="width-[30px] h-[20px]"> 
              </div>
              <div>
                 <p class="text-white">pakai Nasi? </p>
                 <input type="button"> 
              </div>
          
            </div>
           
        </form>

       
    </div>

     <div class="w-[300px] h-[400px] bg-green-500 rounded-[8px] ">
        <h2 class="text-center mt-3 text-white">detail pembelian</h2>

        <div class="flex items-center justify-center mt-3">
          <img src="" alt="" class="w-[260px] h-[150px] ">
        </div>

        <div class=" mx-3 flex items-center justify-center">
         <hr class="mt-3 w-[300px] border-t-4 border-black">
        </div>

        <div class="flex justify-between mt-3 mx-3">
            <h2 class="text-white">Makanan</h2>
            <h2 class="text-white">Nasi goreng</h2>
        </div>

        <div class="flex justify-between mt-3 mx-3">
            <h2 class="text-white">Total</h2>
            <h2 class="text-white">1</h2>
        </div>

        <div class="flex justify-between mt-3 mx-3">
            <h2 class="text-white">Sub total</h2>
            <h2 class="text-white">Rp.30.000</h2>
        </div>

        <div class="flex justify-between mt-3 mx-3">
            <h2 class="text-white">No rekening</h2>
            <h2 class="text-white">8728272</h2>
        </div>
        
     </div>

</div>



   


   @endsection