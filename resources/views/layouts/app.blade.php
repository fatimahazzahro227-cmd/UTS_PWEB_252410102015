<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Modern Wood')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-white text-black min-h-screen flex flex-col">
    @include('components.navbar')
    <main class="flex-1 w-full relative">
        @yield('content')
    </main>
    <x-footer />
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
