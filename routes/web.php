<?php

use App\Http\Controllers\StoryController;
// use App\Http\Controllers\StoryController;
use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;

Route::get('/Home', function () {
    return view('Home');
});
Route::get('/Upload', function () {
    return view('Upload');
});

Route::get('/About', function () {
    return view('About');
});

Route::get('/Data', function () {
    return view('Data');
});


// For User  interface 

Route::get('/userData',[StoryController::class,'index'])->name('data');
Route::post('/userData',[StoryController::class,'store'])->name('store');



Route::get('/userData/create',[StoryController::class,'create'])->name('Home');
Route::get('/userData/{id}/edit',[StoryController::class,'edit'])->name('edit');
Route::put('/userData/{id}/update',[StoryController::class,'update'])->name('update');
Route::get('/userData/{id}/delete',[StoryController::class,'delete'])->name('delete');



// Authontication user create Account

Route::get('/',[authController::class,'signIn'])->name('auth.signIn');
Route::post('login', [authController::class, 'login'])->name('login');
Route::get('logout', [authController::class, 'logout'])->name('logout');



Route::get('/signUp',[authController::class,'signUp'])->name('auth.signUp');
Route::post('/register', [authController::class, 'register']);
