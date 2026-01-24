@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1
            class="text-4xl font-black text-gray-900 mb-12 text-center uppercase tracking-[0.2em] relative inline-block w-full">
            <span class="relative">
                PRODUCT
            </span>
        </h1>

        <div
            class="flex justify-center flex-wrap gap-8 mb-16 text-[11px] font-bold uppercase tracking-[0.2em] text-gray-400">
            {{-- Kita memfilter agar 'Elektronik' tidak muncul di list --}}
            @foreach (\App\Models\Category::where('name', '!=', 'Elektronik')->get() as $cat)
                <a href="{{ route('category-detail', $cat->slug) }}"
                    class="{{ isset($category) && $category->id == $cat->id ? 'text-blue-600 border-b-2 border-blue-600' : 'hover:text-gray-900 border-b-2 border-transparent' }} pb-2 transition-all duration-300">
                    {{ $cat->name }}
                </a>
            @endforeach
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
            @forelse ($product as $item)
                <div
                    class="bg-[#f3f4f7] p-6 rounded-3xl transition-all duration-500 flex flex-col group border border-transparent hover:border-blue-400 hover:ring-4 hover:ring-blue-400/20 hover:shadow-xl hover:bg-[#ebedf2]">
                    <a href="{{ route('product-detail', $item->slug) }}" class="flex flex-col h-full">
                        <div class="w-full aspect-square overflow-hidden mb-6 flex items-center justify-center">
                            @if ($item->image)
                                <img src="{{ asset('images/' . $item->image) }}"
                                    class="w-full h-full object-contain mix-blend-multiply group-hover:scale-110 transition duration-200">
                            @else
                                <span class="text-gray-400 italic text-xs">No Image</span>
                            @endif
                        </div>

                        <h2
                            class="text-lg font-black text-gray-900 uppercase tracking-tight leading-tight mb-4 transition-all duration-200 group-hover:-translate-y-2 group-hover:text-blue-600">
                            {{ $item->name }}
                        </h2>


                        <div class="mt-auto overflow-hidden">
                            <span
                                class="text-blue-600 font-bold text-sm transition-all duration-200 flex items-center group-hover:translate-x-3">
                                Lihat Detail <span
                                    class="ml-1 transition-transform duration-200 group-hover:translate-x-2">&rarr;</span>
                            </span>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-span-full text-center py-20 text-gray-400 italic">
                    Produk tidak ditemukan untuk kategori ini.
                </div>
            @endforelse

        </div>
    </div>
@endsection
