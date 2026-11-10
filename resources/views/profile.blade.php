@extends('layouts.app')

@section('title', 'Profil')

@section('content')

<div class="max-w-2xl mx-auto px-5 pt-20 pb-12 space-y-6">

<div class="bg-white p-8 border-2 border-black space-y-6">

<div class="text-center space-y-2">
    <div class="w-20 h-20 mx-auto bg-gray-200 rounded-full flex items-center justify-center">
        <i class="fa-solid fa-user text-3xl text-gray-600"></i>
    </div>

<h2 class="text-2xl font-serif font-bold text-black">
    {{ $username }}
    </h2>

<p class="text-sm text-gray-500">
    {{ $profile['role'] }}
</p>
</div>

<div class="border-t border-gray-300"></div>

<div class="space-y-4">

<h3 class="text-lg font-serif font-bold text-black">
    Profile Information
</h3>

<div class="flex justify-between items-center gap-4 py-2">
    <span class="text-gray-600 text-sm">Username</span>
    <span class="font-medium text-black text-sm">
    {{ $username }}
    </span>
</div>

<div class="flex justify-between items-center gap-4 py-2">
    <span class="text-gray-600 text-sm">Email</span>
    <span class="font-medium text-black text-sm">
    {{ $profile['email'] }}
    </span>
</div>

<div class="flex justify-between items-center gap-4 py-2">
    <span class="text-gray-600 text-sm">Role</span>
    <span class="font-medium text-black text-sm">
    {{ $profile['role'] }}
    </span>
</div>

<div class="flex justify-between items-center gap-4 py-2">
    <span class="text-gray-600 text-sm">Store</span>
    <span class="font-medium text-black text-sm">
    {{ $profile['store'] }}
    </span>
</div>

<div class="flex justify-between items-center gap-4 py-2">
    <span class="text-gray-600 text-sm">Account Status</span>
    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">
    {{ $profile['status'] }}
    </span>
</div>

</div>

</div>

</div>

@endsection