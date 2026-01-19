<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat atau cari Kategori
        // Kita cari berdasarkan 'slug', jika tidak ada, buat dengan 'name' & 'slug'
        $category = \App\Models\Category::firstOrCreate(
            ['slug' => 'elektronik'],
            ['name' => 'Elektronik']
        );

        // 2. Buat atau cari Produk
        \App\Models\Product::firstOrCreate(
            ['slug' => 'laptop-gaming'],
            [
                'category_id' => $category->id,
                'name' => 'Laptop Gaming',
                'description' => 'Laptop spesifikasi tinggi untuk gaming dan desain.',
                'price' => 15000000,
                'stock' => 5,
                'image' => 'laptop-gaming.jpg'
            ]
        );

        \App\Models\Product::updateOrCreate(
            ['slug' => 'mouse-gaming'],
            [
                'category_id' => $category->id,
                'name' => 'Mouse Gaming',
                'description' => 'Mouse dengan PAW 3950 untuk gaming.',
                'price' => 800000,
                'stock' => 5,
                'image' => 'mouse-gaming.jpg'
            ]
        );
    }
}
