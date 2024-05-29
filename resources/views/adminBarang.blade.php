@extends('layout.adminPage')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal Example</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="flex justify-start items-start h-[100%] flex-wrap gap-[10px]">
        @foreach ($items as $item)
            <div class="top-0 w-[359px] h-[300px] bg-white rounded-[10px] shadow">
                <img class="left-0 top-0 w-[359px] h-[200px] rounded-[10px]" src="/storage/{{ $item->thumbnail }}" />
                <div class="px-[3px] bg-white rounded-[5px]">
                    <button><i class="w-[17px] h-[15px] text-yellow-600" data-feather="star"></i></button>{{ $item->rating }}({{ $item->sold }})
                    <p>{{ $item->title }}, {{ $item->origin }}</p>
                    <p>{{ $item->price }}</p>

                    <div class="flex justify-between mt-3">
                        <button class="edit-button w-[45%] py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-900 hover:bg-indigo-700 cursor-pointer mb-2" data-item-id="{{ $item->id }}">Edit</button>
                        <button class="delete-button w-[45%] py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-800 cursor-pointer mb-2" data-item-id="{{ $item->id }}">Delete</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Modal Edit -->
    <div id="editModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-1/3">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold">Edit Produk</h2>
                <button id="closeEditModalButton" class="text-gray-500 hover:text-gray-700">&times;</button>
            </div>
            <form id="editproduk">
                <div class="mt-4">
                    <label for="Nama" class="block text-sm font-medium text-gray-700">Nama makanan</label>
                    <input type="text" id="Nama" name="Nama" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <div class="mt-4">
                    <label for="kategori" class="block text-sm font-medium text-gray-700">Asal daerah</label>
                    <input type="text" id="kategori" name="kategori" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <div class="mt-4">
                    <label for="Harga" class="block text-sm font-medium text-gray-700">Harga</label>
                    <input type="text" id="Harga" name="Harga" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <div class="mt-4">
                    <label for="stock" class="block text-sm font-medium text-gray-700">Stock</label>
                    <select name="stock" id="stock" class="w-[100%] h-[40px] rounded-[10px]" style="text-indent: 5px;">
                        <option value="tersedia">Tersedia</option>
                        <option value="habis">Habis</option>
                    </select>
                </div>
                <div class="mt-6 flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Delete -->
    <div id="deleteModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-1/3">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold">Delete Confirmation</h2>
                <button id="closeDeleteModalButton" class="text-gray-500 hover:text-gray-700">&times;</button>
            </div>
            <div class="mt-4">
                <p>Are you sure you want to delete this item?</p>
            </div>
            <div class="mt-6 flex justify-end">
                <button id="confirmDeleteButton" class="px-4 py-2 bg-red-600 text-white rounded mr-2">Delete</button>
                <button id="cancelDeleteButton" class="px-4 py-2 bg-gray-300 text-black rounded">Cancel</button>
            </div>
        </div>
    </div>

    <script>
        // JavaScript to handle modals
        const editButtons = document.querySelectorAll('.edit-button');
        const deleteButtons = document.querySelectorAll('.delete-button');
        const editModal = document.getElementById('editModal');
        const deleteModal = document.getElementById('deleteModal');
        const closeEditModalButton = document.getElementById('closeEditModalButton');
        const closeDeleteModalButton = document.getElementById('closeDeleteModalButton');
        const cancelDeleteButton = document.getElementById('cancelDeleteButton');
        const confirmDeleteButton = document.getElementById('confirmDeleteButton');
        const editForm = document.getElementById('editproduk');
        let itemIdToDelete = null;

        editButtons.forEach(button => {
            button.addEventListener('click', () => {
                const itemId = button.getAttribute('data-item-id');
                // Fetch item data using itemId and populate the form (this is just an example)
                // In a real application, you might fetch data from the server
                const item = {
                    title: "Example Title",
                    origin: "Example Origin",
                    price: "123.45",
                    stock: "tersedia"
                };
                document.getElementById('Nama').value = item.title;
                document.getElementById('kategori').value = item.origin;
                document.getElementById('Harga').value = item.price;
                document.getElementById('stock').value = item.stock;
                editModal.classList.remove('hidden');
            });
        });

        deleteButtons.forEach(button => {
            button.addEventListener('click', () => {
                itemIdToDelete = button.getAttribute('data-item-id');
                deleteModal.classList.remove('hidden');
            });
        });

        closeEditModalButton.addEventListener('click', () => {
            editModal.classList.add('hidden');
        });

        closeDeleteModalButton.addEventListener('click', () => {
            deleteModal.classList.add('hidden');
        });

        cancelDeleteButton.addEventListener('click', () => {
            deleteModal.classList.add('hidden');
        });

        window.addEventListener('click', (event) => {
            if (event.target == editModal) {
                editModal.classList.add('hidden');
            }
            if (event.target == deleteModal) {
                deleteModal.classList.add('hidden');
            }
        });

        editForm.addEventListener('submit', (event) => {
            event.preventDefault();
            // Handle form submission logic (e.g., send data to the server)
            alert('Form submitted');
            editModal.classList.add('hidden');
        });

        confirmDeleteButton.addEventListener('click', () => {
            // Handle delete logic (e.g., send delete request to the server)
            alert(`Item with ID ${itemIdToDelete} has been deleted.`);
            deleteModal.classList.add('hidden');
        });
    </script>
</body>
</html>

@endsection