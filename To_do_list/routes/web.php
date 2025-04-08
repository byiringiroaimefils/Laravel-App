<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

// Display all todos
Route::get('/', [TodoController::class, 'index'])->name('todo.index');

// Show insert form
Route::get('/todo/create', [TodoController::class, 'show_insert'])->name('todo.create');

// Handle insert
Route::post('/todo/insert', [TodoController::class, 'insert'])->name('todo.store');

// Show update form according to id
Route::get('/todo/edit/{id}', [TodoController::class, 'show_update'])->name('todo.edit');

// Handle update form
Route::put('/todo/edit/{id}', [TodoController::class, 'update'])->name('todo.update');

// Handle delete
Route::delete('/todo/delete/{id}', [TodoController::class, 'delete'])->name('todo.delete');
