@extends('layout.dashboard2')
@section('content')

<div class="flex flex-col md:flex-row w-full min-h-screen">
<div class="hidden md:block w-full md:w-[300px] h-full">
    <div class="mt-[80px] ml-[30px] md:ml-4">
        @include('components.userSideBar')
    </div>
</div>


  <div class="w-full md:w-[59%] h-full md:ml-[190px] p-4 md:p-0">
    <div class="mt-[40px]">
      <h2 class="text-2xl md:text-4xl ml-[60px] font-bold font-['Poppins']">Profil Saya</h2>
      <hr class="w-full border-t-2 border-black mt-3">
    </div>

    <div class="flex flex-col md:flex-row mt-5">
      <div class="w-full md:w-auto flex flex-col items-center md:block">
        <div class="w-[222px] h-[187px] rounded-[40px] bg-cover bg-no-repeat bg-center" style="background-image: url(storage/{{ auth()->user()->photo }});"></div>
        <form action="{{ route('profile.photo', auth()->user()->email) }}" method="post" class="mt-3 flex items-center justify-center md:justify-start md:ml-[56px]" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <input type="file" name="changePhoto" id="fileInput" class="hidden" accept="image/*" onchange="this.form.submit()">
          <label for="fileInput" class="cursor-pointer flex items-center text-black">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            <span class="ml-2">Ganti Foto</span>
          </label>
        </form>
      </div>

      <div class="w-full md:ml-6 mt-6 md:mt-0">
        <div class="ml-4 md:ml-0">
          <p class="font-semibold">NAMA LENGKAP</p>
          <div class="w-full h-[62px] rounded-lg bg-gray-200 flex items-center pl-4 mb-4">{{ auth()->user()->name }}</div>
          
          <p class="font-semibold">EMAIL</p>
          <div class="w-full h-[62px] rounded-lg bg-gray-200 flex items-center pl-4 mb-4">{{ auth()->user()->email }}</div>
          
          <p class="font-semibold">ALAMAT</p>
          <div class="w-full md:w-[271px] h-[62px] rounded-lg bg-gray-200 flex items-center pl-4 mb-4">{{ auth()->user()->address }}</div>

          <div class="flex flex-wrap justify-between mt-4">
            <div class="w-full md:w-[201px] mb-4 md:mb-0">
              <p class="font-semibold">Tanggal</p>
              <div class="w-full h-[62px] rounded-lg bg-gray-200 flex items-center pl-4">{{ $string[2] }}</div>
            </div>
            <div class="w-full md:w-[201px] mb-4 md:mb-0">
              <p class="font-semibold">Bulan</p>
              <div class="w-full h-[62px] rounded-lg bg-gray-200 flex items-center pl-4">{{ $monthName }}</div>
            </div>
            <div class="w-full md:w-[201px]">
              <p class="font-semibold">Tahun</p>
              <div class="w-full h-[62px] rounded-lg bg-gray-200 flex items-center pl-4">{{ $string[0] }}</div>
            </div>
          </div>

          <div class="flex justify-end mt-6">
            <button id="updateProfileButton" class="w-full md:w-[286px] h-[62px] bg-green-500 text-white rounded-lg">Perbarui Profil</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="updateProfileModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 w-11/12 md:w-1/3">
      <div class="flex justify-between items-center">
        <h2 class="text-xl font-semibold">Perbarui Profil</h2>
        <button id="closeUpdateModalButton" class="text-gray-500 hover:text-gray-700">&times;</button>
      </div>
      <form id="updateProfileForm" method="post" action="{{ route('profile.update', auth()->user()->email) }}">
        @csrf
        @method('PUT')
        <div class="mt-4">
          <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
          <input type="text" id="name" name="name" value="{{ auth()->user()->name }}" class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div class="mt-4">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div class="mt-4">
          <label for="address" class="block text-sm font-medium text-gray-700">Alamat</label>
          <input type="text" id="address" name="address" value="{{ auth()->user()->address }}" class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div class="mt-4">
          <label for="date" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
          <input type="date" id="date" name="date" value="{{ auth()->user()->date }}" class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div class="mt-6 flex justify-end">
          <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  // JavaScript untuk mengatur modal
  const updateProfileButton = document.getElementById('updateProfileButton');
  const updateProfileModal = document.getElementById('updateProfileModal');
  const closeUpdateModalButton = document.getElementById('closeUpdateModalButton');

  updateProfileButton.addEventListener('click', () => {
    updateProfileModal.classList.remove('hidden');
  });

  closeUpdateModalButton.addEventListener('click', () => {
    updateProfileModal.classList.add('hidden');
  });

  window.addEventListener('click', (event) => {
    if (event.target == updateProfileModal) {
      updateProfileModal.classList.add('hidden');
    }
  });
</script>

@endsection
