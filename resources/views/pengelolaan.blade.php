@extends('layouts.app')

@section('content')

<div class="bg-white px-6 md:px-10 py-12 text-black">

<div class="mb-12">
<h1 class="text-4xl font-serif font-bold text-black mb-2">
    Product Management
</h1>

<p class="text-sm text-black">
    Manage and monitor your furniture collections.
</p>
</div>

<div class="w-full">

<h2 class="text-2xl font-serif font-bold text-black mb-3">
    Product List
</h2>

<div class="overflow-x-auto border-2 border-black">

<table class="w-full text-left text-sm text-black">

<thead class="bg-[#f3eee8] border-b-2 border-black">
    <tr>
    <th class="px-4 py-4 font-medium">No.</th>
    <th class="px-4 py-4 font-medium">Product Name</th>
    <th class="px-4 py-4 font-medium">Category</th>
    <th class="px-4 py-4 font-medium">Price</th>
    <th class="px-4 py-4 font-medium">Stock</th>
    <th class="px-4 py-4 font-medium">Status</th>
    </tr>
    </thead>

<tbody class="divide-y divide-black">

@foreach ($products as $index => $product)
    <tr class="hover:bg-gray-50 transition">
                    
<td class="px-4 py-4">
    {{ $index + 1 }}
</td>

<td class="px-4 py-4">
    {{ $product['name'] }}
</td>

<td class="px-4 py-4">
    {{ $product['category'] }}
</td>

<td class="px-4 py-4">
    {{ $product['price'] }}
</td>

<td class="px-4 py-4">
    {{ $product['stock'] }}
</td>

<td class="px-4 py-4">
    @if ($product['stock'] > 0)
        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">
            Available
        </span>
    @else
        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-medium">
            Out of Stock
        </span>
    @endif
</td>

</tr>
@endforeach

</tbody>

</table>

</div>

</div>

</div>

@endsection
