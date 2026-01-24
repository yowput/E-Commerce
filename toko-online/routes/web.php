<?php

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

// ROUTE UTAMA: Langsung ambil kategori pertama (Keyboard)
Route::get('/', function () {
    // 1. Ambil kategori pertama (Misal: Laptop)
    $category = Category::first();

    // 2. Ambil produk yang HANYA milik kategori itu saja
    // Pastikan menggunakan 'where' dan bukan 'all()'
    $product = $category
        ? Product::where('category_id', $category->id)->get()
        : collect();

    return view('welcome', compact('product', 'category'));
})->name('welcome'); // Beri nama 'home' agar sinkron dengan Navbar

// ROUTE ABOUT
Route::get('/about', function () {
    return view('about');
})->name('about');

// ROUTE DETAIL PRODUK
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product-detail');

// ROUTE DETAIL KATEGORI (Penting untuk menu klik Keyboard, Mouse, dll)
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category-detail');
