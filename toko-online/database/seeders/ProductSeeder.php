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
        // Contoh di dalam run()
        $catLaptop   = Category::firstOrCreate(['slug' => 'laptop'], ['name' => 'Laptop']);
        $catMouse    = Category::firstOrCreate(['slug' => 'mouse'], ['name' => 'Mouse']);
        $catKeyboard = Category::firstOrCreate(['slug' => 'keyboard'], ['name' => 'Keyboard']);
        $catHeadset  = Category::firstOrCreate(['slug' => 'headset'], ['name' => 'Headset']);
        $catMousepad = Category::firstOrCreate(['slug' => 'mousepad'], ['name' => 'Mousepad']);
        // 1. Buat atau cari Kategori
        // Kita cari berdasarkan 'slug', jika tidak ada, buat dengan 'name' & 'slug

        // 2. Buat atau cari Produk
        Product::updateOrCreate(
            ['slug' => 'laptop-gaming'],
            [
                'category_id' => $catLaptop->id, // Pakai ID Laptop
                'name' => 'Laptop ROG',
                'description' => 'Laptop spesifikasi tinggi.',
                'price' => 15000000,
                'stock' => 5,
                'image' => 'laptop-gaming.jpg'
            ]
        );

        Product::updateOrCreate(
            ['slug' => 'mouse-gaming'],
            [
                'category_id' => $catMouse->id, // Pakai ID Mouse
                'name' => 'Inno X3 Pro',
                'description' => 'Mouse PAW 3950.',
                'price' => 800000,
                'stock' => 5,
                'image' => 'mouse-gaming.jpg'
            ]
        );

        Product::updateOrCreate(
            ['slug' => 'keyboard-gaming'],
            [
                'category_id' => $catKeyboard->id,
                'name' => 'Ajazz Ak680',
                'description' => 'Keyboard mekanik dengan pencahayaan RGB.',
                'price' => 1500000,
                'stock' => 5,
                'image' => 'keyboard.webp'
            ]
        );

        Product::updateOrCreate(
            ['slug' => 'Headset-gaming'],
            [
                'category_id' => $catHeadset->id,
                'name' => 'Headset Gaming',
                'description' => 'Headset gaming dengan suara jernih dan nyaman digunakan.',
                'price' => 700000,
                'stock' => 5,
                'image' => 'headset-gaming.jpeg'
            ]
        );

        Product::updateOrCreate(
            ['slug' => 'mouse-logitech'],
            [
                'category_id' => $catMouse->id,
                'name' => 'Mouse Logitech',
                'description' => 'Mouse Logitech dengan desain ergonomis dan presisi tinggi.',
                'price' => 1000000,
                'stock' => 5,
                'image' => 'mouse-gaming2.jpeg'
            ]
        );

        Product::updateOrCreate(
            ['slug' => 'glasspad'],
            [
                'category_id' => $catMousepad->id,
                'name' => 'Glasspad',
                'description' => 'Glasspad gaming dengan permukaan halus untuk kontrol maksimal.',
                'price' => 1300000,
                'stock' => 5,
                'image' => 'glasspad.jpeg'
            ]
        );

        Product::updateOrCreate(
            ['slug' => 'glasspad-rog'],
            [
                'category_id' => $catMousepad->id,
                'name' => 'Glasspad ROG',
                'description' => 'Mousepad gaming dengan permukaan anti-slip dan desain menarik.',
                'price' => 1500000,
                'stock' => 5,
                'image' => 'glasspadROG.jpg'
            ]
        );

        Product::updateOrCreate(
            ['slug' => 'msi-laptop'],
            [
                'category_id' => $catLaptop->id,
                'name' => 'MSI Laptop',
                'description' => 'Laptop gaming MSI dengan performa tinggi.',
                'price' => 20000000,
                'stock' => 5,
                'image' => 'Msi-laptop.jpeg'
            ]
        );
        Product::updateOrCreate(
            ['slug' => 'tuf-laptop'],
            [
                'category_id' => $catLaptop->id,
                'name' => 'TUF Laptop',
                'description' => 'Laptop gaming ASUS TUF dengan daya tahan ekstra.',
                'price' => 18000000,
                'stock' => 5,
                'image' => 'tuf-gaming.jpeg'
            ]
        );
    }
}
