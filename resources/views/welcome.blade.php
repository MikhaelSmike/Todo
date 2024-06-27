@extends('layouts.main')

@push('head') Home @endpush

@section('main-section')
<div class="container mx-auto">
    <div class="flex justify-between w-8/12 mx-auto items-center my-5">
        <h1 class="text-2xl">All Todos</h1>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            <a href="">Add Todo</a>
        </button>
    </div>

    <div class="bg-pink-900 w-8/12 mx-auto my-6 rounded-md">
        <table class="items-center w-full">
            <thead class="text-white">
                <tr class="align-middle px-4 font-semibold text-left bg-pink-800 text-pink-300 border">
                    <th class="px-4 py-2">Task Name</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Due date</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody class="text-white text-sm">
                <tr class="border">
                    <td class="px-4 py-3 w-3/12">Wash Clothes</td>
                    <td class="px-4 py-3 w-3/12">Wash Clothes at 10:00 AM</td>
                    <td class="px-4 py-3 w-3/12">28-06-2024 14:00</td>
                    <td class="px-4 py-3 w-3/12 space-x-2">
                        <a href="" class="bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded-xl">Update</a>
                        <a href="" class="bg-red-500 hover:bg-red-700 text-white space-x-4 py-1 px-2 rounded-xl">Delete</a>
                    </td>
                </tr>
                <tr class="border">
                    <td class="px-4">Wash</td>
                    <td class="px-4">fff</td>
                    <td class="px-4">fff</td>
                    <td class="px-4">
                        <a href="" class="btn btn-success btn-sm">Update</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <tr class="border">
                    <td class="px-4">Wash</td>
                    <td class="px-4">fff</td>
                    <td class="px-4">fff</td>
                    <td class="px-4">
                        <a href="" class="btn btn-success btn-sm">Update</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            </tbody>    
        </table>
    </div>
</div>

@endsection