<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    $product = Product::all();
    return view('welcome', compact('product'));
});

Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product-detail');
