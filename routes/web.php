<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/About', function () {
    return view('About');
});

Route::get('/Data', function () {
    return view('Data');
});


// For User  interface 

Route::get('/userData',[UserController::class,'index'])->name('data')->middleware('Auth.check');
Route::post('/userData',[UserController::class,'store'])->name('store')->middleware('Auth.check');
Route::get('/userData/create',[UserController::class,'create'])->name('Home')->middleware('Auth.check');
Route::get('/userData/{id}/edit',[UserController::class,'edit'])->name('edit')->middleware('Auth.check');
Route::put('/userData/{id}/update',[UserController::class,'update'])->name('update')->middleware('Auth.check');
Route::get('/userData/{id}/delete',[UserController::class,'delete'])->name('delete')->middleware('Auth.check');



// Authontication user create Account

Route::get('/',[authController::class,'signIn'])->name('auth.signIn');
Route::post('login', [authController::class, 'login'])->name('login');
Route::get('logout', [authController::class, 'logout'])->name('logout');



Route::get('/signUp',[authController::class,'signUp'])->name('auth.signUp');
Route::post('/register', [authController::class, 'register']);
