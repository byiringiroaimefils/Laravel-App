<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// For product
Route::get('/products', [ProductController::class, 'index'])->name('products')->middleware(['auth']);
Route::post('/insertProduct', [ProductController::class, 'store'])->name('insertProduct')->middleware(['auth']);
Route::get('/products/{id}/delete', [ProductController::class, 'delete'])->name('delete')->middleware(['auth']);
// Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('edit');


// For stoct-in



// For stock-out


Route::get('/stock-in', [StockController::class, 'stockIn'])->name('stock-in')->middleware(['auth']);
Route::get('/stock-out', [StockController::class, 'stockOut'])->name('stock-out')->middleware(['auth']);
Route::get('/reports', [ReportController::class, 'index'])->name('reports')->middleware(['auth']);
Route::post('/product-in', [StockController::class, 'stockIn'])->name('productIn.store');

Route::post('/products/{id}/stock-in', [ProductController::class, 'stockIn'])->name('products.stockIn');
Route::post('/products/{id}/stock-out', [ProductController::class, 'stockOut'])->name('products.stockOut');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
