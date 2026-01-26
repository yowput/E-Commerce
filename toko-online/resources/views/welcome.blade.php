@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-6 sm:px-10 md:px-12 lg:px-8">
        <h1 class="text-3xl md:text-4xl font-black text-gray-900 mb-12 text-center uppercase tracking-[0.2em]">
            PRODUCT
        </h1>

        <div class="max-w-7xl mx-auto mb-16 px-4">
            <div
                class="flex flex-wrap justify-center items-center gap-x-12 gap-y-6 text-center border-b border-gray-100 pb-6">
                @foreach (\App\Models\Category::where('name', '!=', 'Elektronik')->get() as $cat)
                    <div class="relative group">
                        <a href="{{ route('category-detail', $cat->slug) }}"
                            class="block pb-3 text-[12px] font-bold uppercase tracking-[0.2em] transition-all duration-300 
                    {{ isset($category) && $category->id == $cat->id ? 'text-blue-600' : 'text-gray-400 hover:text-gray-900' }}">

                            {{ $cat->name }}
                        </a>

                        @if (isset($category) && $category->id == $cat->id)
                            <div class="absolute bottom-0 left-0 right-0 h-[2px] bg-blue-600"></div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-10">
            @forelse ($product as $item)
                <div
                    class="bg-[#f3f4f7] p-6 rounded-3xl transition-all duration-500 flex flex-col group border border-transparent hover:border-blue-400 hover:ring-4 hover:ring-blue-400/20 hover:shadow-xl hover:bg-[#ebedf2]">
                    <a href="{{ route('product-detail', $item->slug) }}" class="flex flex-col h-full">

                        <div
                            class="w-full aspect-square overflow-hidden mb-6 flex items-center justify-center bg-white rounded-2xl">
                            @if ($item->image)
                                <img src="{{ asset('images/' . $item->image) }}"
                                    class="w-full h-full object-contain mix-blend-multiply group-hover:scale-110 transition duration-500">
                            @else
                                <span class="text-gray-400 italic text-xs">No Image</span>
                            @endif
                        </div>

                        <h2
                            class="text-lg font-black text-gray-900 tracking-tight leading-tight mb-4 transition-all duration-200 group-hover:text-blue-600">
                            {{ $item->name }}
                        </h2>

                        <div class="mt-auto overflow-hidden">
                            <span
                                class="text-blue-600 font-bold text-sm transition-all duration-200 flex items-center group-hover:translate-x-2">
                                Lihat Detail
                                <span class="ml-1 transition-transform duration-200 group-hover:translate-x-1">&rarr;</span>
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
