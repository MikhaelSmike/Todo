<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class,'index'])->name('home');

Route::get('/create', function () {
    return view('create');
})->name("createTodo");


Route::get('/create', function () {
    return view('create');
});

Route::get('/update', function () {
    return view('update');
});
