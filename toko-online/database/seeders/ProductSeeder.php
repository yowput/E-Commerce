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
                'name' => 'Laptop ROG',
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
                'name' => 'Inno X3 Pro',
                'description' => 'Mouse dengan PAW 3950 untuk gaming.',
                'price' => 800000,
                'stock' => 5,
                'image' => 'mouse-gaming.jpg'
            ]
        );

        \App\Models\Product::updateOrCreate(
            ['slug' => 'keyboard-gaming'],
            [
                'category_id' => $category->id,
                'name' => 'Ajazz Ak680',
                'description' => 'Keyboard mekanik dengan pencahayaan RGB.',
                'price' => 1500000,
                'stock' => 5,
                'image' => 'keyboard.webp'
            ]
        );

        \App\Models\Product::updateOrCreate(
            ['slug' => 'Headset-gaming'],
            [
                'category_id' => $category->id,
                'name' => 'Headset Gaming',
                'description' => 'Headset gaming dengan suara jernih dan nyaman digunakan.',
                'price' => 700000,
                'stock' => 5,
                'image' => 'headset-gaming.jpeg'
            ]
        );

        \App\Models\Product::updateOrCreate(
            ['slug' => 'mouse-logitech'],
            [
                'category_id' => $category->id,
                'name' => 'Mouse Logitech',
                'description' => 'Mouse Logitech dengan desain ergonomis dan presisi tinggi.',
                'price' => 1000000,
                'stock' => 5,
                'image' => 'mouse-gaming2.jpeg'
            ]
        );

        \App\Models\Product::updateOrCreate(
            ['slug' => 'glasspad'],
            [
                'category_id' => $category->id,
                'name' => 'Glasspad',
                'description' => 'Glasspad gaming dengan permukaan halus untuk kontrol maksimal.',
                'price' => 1300000,
                'stock' => 5,
                'image' => 'glasspad.jpeg'
            ]
        );
    }
}
