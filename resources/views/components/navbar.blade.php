@if (!request()->routeIs('login'))

    @if (request()->routeIs('dashboard'))

    <header class="absolute top-0 left-0 z-50 w-full px-5 md:px-16 py-4 md:py-6 flex items-center justify-between bg-transparent text-[#2c221e]">

    @else

    <header class="relative z-50 shrink-0 w-full px-5 md:px-12 py-4 md:py-5 flex items-center justify-between bg-white border-b border-gray-200 text-black">

    @endif

        <a href="{{ route('dashboard', [
        'username' => request()->query('username', session('username', 'Admin'))
        ]) }}"
        class="font-serif text-base md:text-2xl font-bold tracking-widest">

            Modern Wood

        </a>

        <button
            type="button"
            id="menuToggle"
            class="text-2xl px-2 py-1"
            aria-label="Buka menu"
            aria-expanded="false">

            <i id="menuIcon" class="fas fa-bars"></i>

        </button>

        <nav id="mainNav" class="font-medium text-sm">

            <a href="{{ route('dashboard', [
            'username' => request()->query('username', session('username', 'Admin'))
            ]) }}"
            class="hover:text-gray-500 transition">

            Dashboard

            </a>

            <a href="{{ route('pengelolaan', [
            'username' => request()->query('username', session('username', 'Admin'))
            ]) }}"
            class="hover:text-gray-500 transition">

            Pengelolaan

            </a>

            <a href="{{ route('profile', [
            'username' => request()->query('username', session('username', 'Admin'))
            ]) }}"
            class="hover:text-gray-500 transition">

            Profil

            </a>

            <form action="{{ route('logout') }}" method="POST">

            @csrf

        <button type="submit"
        class="hover:text-gray-500 transition">

        Logout

        </button>

        </form>

        </nav>

    </header>

@endif
