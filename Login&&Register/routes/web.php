<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;


Route::get('/', function () {
    return view('Auth.register');
});
Route::get('/login', function () {
    return view('Auth.login');
});

Route::get('/dashbord', [registerController::class, 'dashboard'])->name('dashbord')->middleware('App\Http\Middleware\auth');
Route::post('/register',[registerController::class,'register'])->name('register.store');
Route::post('/login',[registerController::class,'login'])->name('login');
Route::post('/logout',[registerController::class,'logout'])->name('logout');
Route::get('/edit/{id}',[registerController::class,'edit_user'])->name('user.edit');
Route::put('/update/{id}',[registerController::class,'update_user'])->name('update_user');
Route::delete('/delete/{id}',[registerController::class,'delete_user'])->name('delete_user');
    