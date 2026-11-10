@extends('layouts.app')

@section('title', 'Login')

@section('content')

<section class="min-h-[80vh] flex items-center justify-center px-5">

<div class="w-full max-w-md space-y-10">

<div class="text-center space-y-3">
<h1 class="font-serif text-4xl font-bold tracking-widest text-black">
Modern Wood
</h1>

<p class="text-black text-base">
Welcome to Furniture Store
</p>
</div>

<form action="{{ route('login.process') }}" method="POST" class="space-y-6">
     @csrf

<div class="space-y-2">
<label for="username" class="block text-sm font-medium text-black">
    Username
</label>

<input
    type="text"
    id="username"
    name="username"
    placeholder="Masukkan username"
    value="{{ old('username') }}"
    required
    class="w-full border border-black px-5 py-4 text-black outline-none">
    @error('username')
<p class="text-red-600 text-xs">{{ $message }}</p>
    @enderror
</div>

<button type="submit"
    class="w-full bg-[#1a1412] text-white py-4 hover:bg-black transition">
    Enter
</button>

</form>

</div>

</section>

@endsection
