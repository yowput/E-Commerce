<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - Detail Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-5 md:p-10">
    <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/2 bg-gray-50 p-5 flex items-center justify-center">
                @if ($product->image)
                    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}"
                        class="max-w-full h-auto rounded-lg shadow-sm">
                @else
                    <div class="w-full aspect-square bg-gray-200 flex items-center justify-center text-gray-400">Gambar
                        tidak tersedia</div>
                @endif
            </div>

            <div class="md:w-1/2 p-8 flex flex-col justify-center">
                <a href="/" class="text-blue-600 hover:underline mb-4 inline-block text-sm font-medium">← Kembali
                    ke Toko</a>

                <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $product->name }}</h1>
                <p class="text-2xl font-bold text-green-600 mb-6">Rp {{ number_format($product->price, 0, ',', '.') }}
                </p>

                <div class="border-t border-b py-4 mb-6">
                    <h3 class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-2">Deskripsi</h3>
                    <p class="text-gray-600 leading-relaxed">{{ $product->description }}</p>
                </div>

                <div class="flex items-center gap-4">
                    <div class="text-sm text-gray-500 font-medium">Stok: <span
                            class="text-gray-900">{{ $product->stock }}</span></div>
                    <button
                        class="flex-1 bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 transition">
                        Beli Sekarang
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
