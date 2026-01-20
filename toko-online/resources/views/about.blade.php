@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center mb-24">
            <p class="text-blue-600 font-bold text-xs uppercase tracking-[0.5em] mb-4">About My Store</p>
            <h1 class="text-5xl md:text-6xl font-black text-gray-900 uppercase tracking-tighter italic">
                Defining The <span class="text-blue-600">Future</span>
            </h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mb-32">
            <div class="order-2 md:order-1">
                <h2 class="text-3xl font-black text-gray-900 uppercase tracking-tight mb-6 italic">Who We Are</h2>
                <p class="text-gray-600 leading-loose mb-6">
                    Berawal dari semangat untuk menghadirkan teknologi terbaik bagi semua orang, **MY STORE** hadir sebagai
                    destinasi utama bagi para penggiat produktivitas dan gaming. Kami percaya bahwa perangkat yang tepat
                    dapat meningkatkan potensi maksimal seseorang.
                </p>
                <p class="text-gray-600 leading-loose">
                    Seperti halnya filosofi "Level Up Your Productivity", setiap produk yang kami kurasi telah melalui
                    seleksi ketat untuk memastikan kualitas, durabilitas, dan performa yang luar biasa.
                </p>
            </div>
            <div
                class="order-1 md:order-2 bg-[#f3f4f7] rounded-[3rem] p-10 flex items-center justify-center aspect-video overflow-hidden shadow-2xl shadow-gray-200">
                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1000" alt="About Image"
                    class="rounded-2xl mix-blend-multiply opacity-80">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-10 rounded-3xl border border-gray-100 hover:shadow-xl transition duration-500">
                <div class="text-blue-600 text-3xl mb-6">⚡</div>
                <h3 class="font-black uppercase tracking-tight mb-4 italic">High Performance</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Kami hanya menyediakan perangkat dengan performa tinggi
                    untuk kebutuhan kerja dan bermain kamu.</p>
            </div>
            <div class="bg-white p-10 rounded-3xl border border-gray-100 hover:shadow-xl transition duration-500">
                <div class="text-blue-600 text-3xl mb-6">🛡️</div>
                <h3 class="font-black uppercase tracking-tight mb-4 italic">Official Warranty</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Semua produk dilindungi oleh garansi resmi, memberikan rasa
                    aman dalam setiap pembelian.</p>
            </div>
            <div class="bg-white p-10 rounded-3xl border border-gray-100 hover:shadow-xl transition duration-500">
                <div class="text-blue-600 text-3xl mb-6">🤝</div>
                <h3 class="font-black uppercase tracking-tight mb-4 italic">Customer First</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Tim dukungan kami siap membantu kamu memilih perangkat yang
                    paling sesuai dengan kebutuhanmu.</p>
            </div>
        </div>
    </div>
@endsection
