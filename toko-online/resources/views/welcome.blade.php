        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Toko Online Saya</title>
            <script src="https://cdn.tailwindcss.com"></script>
        </head>

        <body class="bg-gray-100 p-10">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-3xl font-bold text-center mb-8">Daftar Produk Toko Kami</h1>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach ($products as $item)
                        <div class="bg-white p-4 rounded-lg shadow-md border border-gray-200 flex flex-col">

                            <div
                                class="w-full aspect-square overflow-hidden rounded-md mb-4 bg-gray-50 flex items-center justify-center">
                                @if ($item->image)
                                    <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->name }}"
                                        class="w-full h-full object-contain p-2">
                                @else
                                    <span class="text-gray-400 italic text-xs">Tidak ada gambar</span>
                                @endif
                            </div>

                            <h2 class="text-sm font-semibold text-gray-800 line-clamp-2 h-10">{{ $item->name }}</h2>
                            <p class="text-xs text-gray-500 mt-1 line-clamp-2">{{ $item->description }}</p>

                            <div class="mt-auto pt-4 flex flex-col gap-2">
                                <span class="text-green-600 font-bold text-sm">
                                    Rp {{ number_format($item->price, 0, ',', '.') }}
                                </span>
                                <button
                                    class="w-full bg-blue-600 text-white text-xs py-2 rounded-md hover:bg-blue-700 transition">
                                    Beli
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>

                @if ($products->isEmpty())
                    <p class="text-center text-gray-500">Belum ada produk di database.</p>
                @endif
            </div>
        </body>

        </html>
