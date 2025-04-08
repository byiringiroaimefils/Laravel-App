<?php
use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [usersController::class, 'index'])->name('index');
Route::get('/users/display', [usersController::class, 'display'])->name('display');
Route::post('/users/insert', [usersController::class, 'insertData'])->name('users.store');
Route::get('/users/{id}', [usersController::class, 'select'])->name('select');
Route::put('/users/{id}', [usersController::class, 'update'])->name('update');
Route::delete('/users/{id}', [usersController::class, 'delete'])->name('delete');
