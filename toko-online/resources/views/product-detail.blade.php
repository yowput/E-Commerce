@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto px-4">
        <div class="bg-white rounded-3xl shadow-sm border overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-10 bg-gray-50 flex items-center justify-center">
                    <img src="{{ asset('images/' . $product->image) }}" class="max-w-full h-auto rounded-2xl">
                </div>
                <div class="p-12">
                    <h1 class="text-4xl font-black text-gray-900 mb-4">{{ $product->name }}</h1>
                    <p class="text-3xl text-blue-600 font-bold mb-8">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    <div class="border-t py-6 text-gray-600 leading-loose">
                        {{ $product->description }}
                    </div>
                    <button
                        class="w-full bg-black text-white py-5 rounded-2xl font-bold text-xl mt-6 hover:bg-gray-800 transition">
                        ADD TO CART
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
