@extends('layouts.main')

@push('head') Update Todo @endpush

@section('main-section')
<div class="container mx-auto">
    <div class="flex justify-between w-8/12 mx-auto items-center my-5">
        <h1 class="text-2xl">Update Todo</h1>
        <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            <a href="{{ route('home') }}">Back</a>
        </button>
    </div>

    <div class="bg-pink-300 w-8/12 mx-auto border my-6 rounded-md">
        <div class="px-4">
            @foreach ($todos as $todo)
            <form action="{{ route('updateTodo', $todo->id) }}" method="post" class="rounded px-4 pt-5 pb-4 mb-2">
                @csrf
                <label for="taskname" class="block text-gray-700 font-bold mb-2 mt-2">Task Name</label>
                <input type="text" name="taskname" value="{{ $todo->taskname }}" class="border rounded w-full py-2 px-3 text-gray-700">
                <div class="text-red-600">
                    @error('taskname') {{$message}} @enderror
                </div>

                <label for="description" class="block text-gray-700 font-bold mb-2 mt-2">Description</label>
                <input type="text" name="description" value="{{ $todo->description }}" class="border rounded w-full py-8 px-3 text-gray-700">
                <div class="text-red-600">
                    @error('description') {{$message}} @enderror
                </div>

                <label for="duedate" class="block text-gray-700 font-bold mb-2 mt-2">Due Date</label>
                <input type="date" name="duedate" value="{{ $todo->duedate }}" class="border rounded w-full py-2 px-3 text-gray-700">
                <div class="text-red-600">
                    @error('duedate') {{$message}} @enderror
                </div>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-6">Update</button>
            </form>
            @endforeach
        </div>
    </div>
</div>

@endsection