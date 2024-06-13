@extends('layout.adminPage')

@section('content')


<div class="container mx-auto p-4">
        <table class="min-w-full bg-white border border-green-400">
            <thead class="bg-green-200">
                <tr>
                    <th class="py-2 px-4 border-b text-left">Nama</th>
                    <th class="py-2 px-4 border-b text-left">Email</th>
                    <th class="py-2 px-4 border-b text-left">Tgl Lahir</th>
                    <th class="py-2 px-4 border-b text-left">Password</th>
                    <th class="py-2 px-4 border-b text-left">Address</th>
                    <th class="py-2 px-4 border-b text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4 border-b"></td>
                    <td class="py-2 px-4 border-b"></td>
                    <td class="py-2 px-4 border-b"></td>
                    <td class="py-2 px-4 border-b"></td>
                    <td class="py-2 px-4 border-b"></td>
                    <td class="py-2 px-4 border-b">
                        <button class="bg-blue-500 text-white px-2 py-1 rounded mr-2">Edit</button>
                        <button class="bg-red-500 text-white px-2 py-1 rounded">hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection