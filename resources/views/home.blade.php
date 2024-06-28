@extends('layouts.main')

@push('head') Home @endpush

@section('main-section')
<div class="container mx-auto">
    <div class="flex justify-between w-8/12 mx-auto items-center my-5">
        <h1 class="text-2xl">All Todos</h1>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            <a href="{{ route("createTodo") }}">Add Todo</a>
        </button>
    </div>

    <div class="bg-pink-900 w-8/12 mx-auto my-6 rounded-md">
        <table class="items-center w-full">
            <thead class="text-white">
                <tr class="align-middle px-4 font-semibold text-lg text-left bg-pink-800 text-pink-300 border">
                    <th class="px-4 py-2">Task Name</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Due Date</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>

            @if ($todos->count())
                @foreach($todos as $todo)
                    <tbody class="text-white">
                        <tr class="border">
                            <td class="px-4 py-3 w-3/12">{{ $todo->taskname }}</td>
                            <td class="px-4 py-3 w-3/12">{{ $todo->description }}</td>
                            <td class="px-4 py-3 w-3/12">{{ \Carbon\carbon::parse($todo->duedate)->diffForHumans() }}</td>
                            <td class="px-4 py-3 w-3/12 space-x-2">
                                <a href="{{ route('updateTodo', $todo->id) }}" class="bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded-xl">Update</a>
                                <a href="{{ route('deleteTodo', $todo->id) }}" class="bg-red-500 hover:bg-red-700 text-white space-x-4 py-1 px-2 rounded-xl">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            @else
                <p class="text-white">There are no Task to do</p>
            @endif
        </table>
    </div>

    <div class="w-8/12 mx-auto mt-5">
        {{ $todos->links() }}
    </div>
</div>

@endsection