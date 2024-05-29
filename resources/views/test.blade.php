<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal Example</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Button to open modal -->
    <button id="openModalButton" class="px-4 py-2 bg-blue-600 text-white rounded">Open Modal</button>

    <!-- Modal -->
    <div id="myModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-1/3">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold">Modal Title</h2>
                <button id="closeModalButton" class="text-gray-500 hover:text-gray-700">&times;</button>
            </div>
            <p class="mt-4">This is a modal example with Tailwind CSS.</p>
            <div class="mt-6 flex justify-end">
                <button id="closeModalButtonBottom" class="px-4 py-2 bg-gray-600 text-white rounded">Close</button>
            </div>
        </div>
    </div>

    <script>
        // JavaScript to handle modal open and close
        const openModalButton = document.getElementById('openModalButton');
        const closeModalButton = document.getElementById('closeModalButton');
        const closeModalButtonBottom = document.getElementById('closeModalButtonBottom');
        const modal = document.getElementById('myModal');

        openModalButton.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        closeModalButton.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        closeModalButtonBottom.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        window.addEventListener('click', (event) => {
            if (event.target == modal) {
                modal.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
