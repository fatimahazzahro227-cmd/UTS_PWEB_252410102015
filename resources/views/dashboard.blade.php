@extends('layouts.app')

@section('content')

<div class="w-full bg-white">

    <div class="relative w-full aspect-[5/3] bg-cover bg-center flex flex-col justify-between"
    style="background-image: url('{{ asset('images/vas_bunga_atas.jpg') }}');">
    <div class="absolute top-[20%] left-5 sm:left-8 md:left-16 z-10 max-w-xl">

    <h2 class="text-lg sm:text-xl md:text-2xl text-black font-medium pt-8 mb-4">
    Hello, {{ ucwords($username) }}
    </h2>

    <div class="flex flex-col">
    <p class="text-sm sm:text-base text-black tracking-wide font-medium mb-1">
    Welcome to
    </p>

    <h1 class="text-4xl sm:text-5xl md:text-7xl font-serif font-light leading-[1.05] text-black mb-3">
    MODERN<br>WOOD
    </h1>

    <p class="text-sm sm:text-base text-black tracking-wide font-medium">
    For Modern Living
    </p>

    <div class="mt-14 sm:mt-16">
    <a href="#our-collection" class="inline-block bg-black hover:bg-neutral-800 text-white text-xs sm:text-sm font-medium px-6 py-3 rounded-full transition-all duration-300 shadow-md">
    Explore Collection &rarr;
    </a>
    </div>
    
    </div>

    </div>
    
    </div>

</div>

<section id="our-collection" class="bg-white py-12 px-8 w-full">

    <div class="max-w-5xl mx-auto space-y-10">

    <h2 class="text-2xl font-serif font-bold text-black text-center">
        Our Collection
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12 justify-items-center">

    @foreach ($products as $product)

    <div class="space-y-3 group text-center">

    <div class="w-[180px] h-[225px] mx-auto overflow-hidden bg-white">

        <img src="{{ asset($product['image']) }}"
        alt="{{ $product['name'] }}"
        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">

    </div>

        <h3 class="font-serif text-base text-black">
        {{ $product['category'] }}
        </h3>

    <button
        type="button"
        class="text-xs text-black tracking-wide hover:underline"
        data-name="{{ $product['name'] }}"
        data-image="{{ asset($product['image']) }}"
        data-price="{{ $product['price'] }}"
        data-specification="{{ $product['specification'] }}"
        data-dimension="{{ $product['dimension'] }}"
        data-colors="{{ $product['colors'] }}"
        onclick="openProductModal(this)">

        Details &rarr;

    </button>

    </div>

        @endforeach

    </div>

    </div>

</section>

<div id="productModal"
     class="hidden fixed inset-0 z-50 bg-black/50 flex items-center justify-center p-3 sm:p-4">

    <div class="relative bg-white w-full max-w-5xl max-h-[90vh] overflow-y-auto">

    <button onclick="closeProductModal()"
            type="button"
            class="sticky top-3 float-right z-20 mr-4 -mb-10 text-black text-2xl hover:opacity-50">

        &times;
    </button>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 p-5 sm:p-6 md:p-8">

    <div class="flex items-center justify-center">

    <img id="modalImage"
        src=""
        alt="Product Image"
        class="w-full h-52 sm:h-64 md:h-[420px] object-cover">

    </div>

    <div class="flex flex-col gap-7 text-black py-2 md:py-3">

    <div class="space-y-3">

    <p class="text-xs tracking-widest text-black">
        MODERN WOOD COLLECTION
    </p>

    <h2 id="modalName"
        class="text-2xl sm:text-3xl md:text-4xl font-serif font-bold text-black">
    </h2>

    <p id="modalPrice"
        class="text-lg sm:text-xl text-black">
    </p>

    </div>

    <div class="space-y-2">

    <h3 class="text-sm font-semibold text-black">
        Specification
    </h3>

    <p id="modalSpecification"
        class="text-sm text-black">
    </p>

    </div>

    <div class="space-y-2">

    <h3 class="text-sm font-semibold text-black">
        Dimension
    </h3>

    <p id="modalDimension"
        class="text-sm text-black">
    </p>

    </div>

    <div class="space-y-2">

    <h3 class="text-sm font-semibold text-black">
        Colors
    </h3>

    <p id="modalColors"
        class="text-sm text-black">
    </p>

    </div>

    </div>

    </div>

    </div>

</div>

@endsection