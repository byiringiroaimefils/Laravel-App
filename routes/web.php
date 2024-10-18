<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/About', function () {
    return view('About');
});

Route::get('/Data', function () {
    return view('Data');
});

Route::get('/userData',[UserController::class,'index'])->name('data');
Route::get('/userData/create',[UserController::class,'create'])->name('Home');
Route::post('/userData',[UserController::class,'store'])->name('store');
Route::get('/userData/{id}/edit',[UserController::class,'edit'])->name('edit');
Route::put('/userData/{id}/update',[UserController::class,'update'])->name('update');
Route::get('/userData/{id}/delete',[UserController::class,'delete'])->name('delete');