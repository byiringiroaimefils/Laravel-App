<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductData;
use App\Http\Controllers\ProductInController;
use App\Http\Controllers\ProductOutController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

// class ProductController extends Controller
// {
//     public function productData(Request $request ){
//         $data = $request->validate([
//             'productName' => 'required',
//         ]);
//         ProductData::create($data);
//         return redirect()->route('product');
//     }
// }

Route::post('/productIn', [ProductInController::class, 'store'])->name('productIn.store');
Route::post('/productOut', [ProductOutController::class, 'store'])->name('productOut.store');
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


