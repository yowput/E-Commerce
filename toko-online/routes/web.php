<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    $product = Product::all();
    return view('welcome', compact('product'));
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product-detail');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category-detail');
