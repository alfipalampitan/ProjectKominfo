@props(['activePage' => 'home'])

<nav x-data="{ menuOpen: false }" class="bg-blue-600 p-4 shadow-lg fixed top-0 left-0 right-0 z-50">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center text-white text-xl">
            <img class="w-8 h-8" src="{{ asset('img/logo-kominfo.png') }}" alt="Logo">
            <h1 class="ml-3">Dinas Komunikasi dan Informatika</h1>
        </div>

        <!-- Menu (Desktop) -->
        <div class="hidden md:flex space-x-6">
            <a href="/" class="text-white hover:underline {{ $activePage === 'home' ? 'underline' : '' }}">Beranda</a>
            <a href="/profile" class="text-white hover:underline {{ $activePage === 'profile' ? 'underline' : '' }}">Profile</a>
            <a href="/tentang" class="text-white hover:underline {{ $activePage === 'tentang' ? 'underline' : '' }}">Tentang</a>
            <a href="/galeri" class="text-white hover:underline {{ $activePage === 'galeri' ? 'underline' : '' }}">Galeri</a>
        </div>

        <!-- Hamburger Menu (Mobile) -->
        <div class="md:hidden flex items-center">
            <button @click="menuOpen = !menuOpen" class="text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div 
        x-show="menuOpen" 
        x-transition 
        x-cloak
        class="md:hidden bg-blue-700 text-white p-4 space-y-4 absolute w-full left-0 top-16 shadow-lg"
    >
        <a href="/" class="block hover:underline {{ $activePage === 'home' ? 'underline' : '' }}">Beranda</a>
        <a href="/profile" class="block hover:underline {{ $activePage === 'profile' ? 'underline' : '' }}">Profile</a>
        <a href="/tentang" class="block hover:underline {{ $activePage === 'tentang' ? 'underline' : '' }}">Tentang</a>
        <a href="/galeri" class="block hover:underline {{ $activePage === 'galeri' ? 'underline' : '' }}">Galeri</a>
    </div>
</nav>
