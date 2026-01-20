<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function show($slug)
    {
        // Cari kategori berdasarkan slug
        $category = Category::where('slug', $slug)->firstOrFail();

        // Ambil produk yang hanya memiliki category_id tersebut
        $product = $category->product;

        return view('welcome', compact('product', 'category'));
    }
}
