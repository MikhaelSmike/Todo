<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CreateTodoController;
use App\Http\Controllers\UpdateTodoController;

Route::get('/', [TodoController::class,'index'])->name('home');

Route::get('/create', [CreateTodoController::class, 'index'])->name('createTodo');
Route::post('/create', [CreateTodoController::class, 'store']);

Route::get('/update/{id}', [UpdateTodoController::class, 'index'])->name('updateTodo');
Route::post('/update/{id}', [UpdateTodoController::class, 'store']);
