<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online Saya</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 flex flex-col min-h-screen text-gray-900">

    <div class="bg-black text-white text-[10px] py-2 text-center uppercase tracking-[0.3em] font-bold">
        Level Up Your Productivity & Game On
    </div>
    <nav id="navbar" class="bg-white border-b sticky top-0 z-50 transition-shadow duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">

                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="text-2xl font-bold text-black tracking-tighter">
                        MY <span class="text-blue-600">STORE</span>
                    </a>
                </div>

                <div class="hidden md:flex space-x-8">
                    <a href="/"
                        class="{{ Route::is('welcome') ? 'text-gray-900 border-blue-500' : 'text-gray-500 border-transparent' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-bold uppercase tracking-wider transition">
                        Product
                    </a>

                    <a href="{{ route('about') }}"
                        class="{{ Route::is('about') ? 'text-gray-900 border-blue-500' : 'text-gray-500 border-transparent' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-bold uppercase tracking-wider transition">
                        About Us
                    </a>
                </div>

                <div class="flex items-center space-x-4">
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
        &copy; 2026 My Store. All Rights Reserved.
    </footer>
    <script>
        window.onscroll = function() {
            const nav = document.getElementById('navbar');
            if (window.pageYOffset > 1) {
                // Jika discroll lebih dari 10 pixel, tambah shadow
                nav.classList.add('shadow-md');
                nav.classList.remove('border-b'); // Opsional: hapus border saat ada shadow biar rapi
            } else {
                // Jika balik ke paling atas, hapus shadow
                nav.classList.remove('shadow-md');
                nav.classList.add('border-b');
            }
        };
    </script>
</body>

</html>
