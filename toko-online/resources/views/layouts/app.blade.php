<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online Saya</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 flex flex-col min-h-screen">

    <nav class="bg-white shadow-sm border-b sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">

                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="text-2xl font-bold text-black tracking-tighter">
                        MY <span class="text-blue-600">STORE</span>
                    </a>
                </div>

                <div class="hidden md:flex space-x-8">
                    <a href="/"
                        class="text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 border-blue-500 text-sm font-medium">
                        Product
                    </a>

                    @foreach (\App\Models\Category::all() as $cat)
                        <a href="{{ route('category-detail', $cat->slug) }}"
                            class="text-gray-500 hover:text-gray-700 hover:border-gray-300 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium transition">
                            {{ $cat->name }}
                        </a>
                    @endforeach

                    <a href="#"
                        class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 text-sm font-medium">
                        About Us
                    </a>
                </div>

                <div class="flex items-center space-x-4">
                    <button class="text-gray-400 hover:text-gray-500">🔍</button>
                    <button
                        class="bg-blue-600 text-white px-5 py-2 rounded-full text-sm font-bold hover:bg-blue-700 transition">
                        Login
                    </button>
                </div>

            </div>
        </div>
    </nav>

    <main class="py-10 flex-grow">
        @yield('content')
    </main>

    <footer class="bg-white border-t py-10 text-center text-gray-400 text-sm">
        &copy; 2026 MyStore. All Rights Reserved.
    </footer>

</body>

</html>
