@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1
            class="text-4xl font-black text-gray-900 mb-12 text-center uppercase tracking-[0.2em] relative inline-block w-full">
            <span class="relative">
                {{ isset($category) ? $category->name : 'Product' }}
            </span>
        </h1>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
            @foreach ($product as $item)
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
            @endforeach
        </div>
    </div>
@endsection
