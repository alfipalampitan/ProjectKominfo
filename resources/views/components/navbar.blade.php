@props(['activePage' => 'home'])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<nav x-data="{ menuOpen: false, show: false, lastScroll: 0 }" x-init="window.addEventListener('scroll', () => {
    let currentScroll = window.pageYOffset;
    show = currentScroll > 50;
    lastScroll = currentScroll;
})"
    :class="{ 'translate-y-0 opacity-100': show, '-translate-y-full opacity-0': !show }"
    class="bg-blue-600 p-4 shadow-lg fixed top-0 left-0 right-0 z-50 transition-all duration-500 ease-in-out transform opacity-0">

    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center text-white text-xl">
            <img class="w-8 h-8" src="{{ asset('img/logo-kominfo.png') }}" alt="Logo">
            <h1 class="ml-3">Dinas Komunikasi dan Informatika</h1>
        </div>

        <!-- Menu (Desktop) -->
        <div class="hidden md:flex space-x-4 items-center">
            <a href="/home" class="{{ request()->is('home') ? 'active' : 'noactive' }}">Beranda</a>


            <!-- Profile Dropdown -->
            <div class="relative group">
                <a href="/profile" class="text-white flex items-center">
                    Profile <i class="fa-solid fa-chevron-down ml-2"></i>
                </a>
                <div
                    class="absolute left-0 mt-2 w-48 bg-white text-black rounded shadow-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                    <a href="/profile?scroll=visi-misi" class="block px-4 py-2 hover:bg-gray-100">Visi & Misi</a>
                    <a href="/profile?scroll=struktur" class="block px-4 py-2 hover:bg-gray-100">Struktur Organisasi</a>
                </div>
            </div>



            <a href="/layanan" class="{{ request()->is('layanan') ? 'active' : 'noactive' }}">Layanan</a>

            <!-- Dokumen Dropdown -->
            <div class="relative group">
                <a href="#" class="text-white flex items-center">
                    Dokumen <i class="fa-solid fa-chevron-down ml-2"></i>
                </a>
                <div class="dropdown">
                    <a href="/dokumen/laporan" class="bgdropdown">Laporan</a>
                    <a href="/dokumen/publikasi" class="bgdropdown">Publikasi</a>
                </div>
            </div>

            <!-- Peraturan Dropdown -->
            <div class="relative group">
                <a href="#" class="text-white flex items-center">
                    Peraturan <i class="fa-solid fa-chevron-down ml-2"></i>
                </a>
                <div class="dropdown">
                    <a href="/peraturan/daerah" class="bgdropdown">Peraturan Daerah</a>
                    <a href="/peraturan/nasional" class="bgdropdown">Peraturan Nasional</a>
                </div>
            </div>

            <!-- Galeri Dropdown -->
            <div class="relative group">
                <a href="#" class="text-white flex items-center">
                    Galeri <i class="fa-solid fa-chevron-down ml-2"></i>
                </a>
                <div
                    class="absolute left-0 mt-2 w-48 bg-white text-black rounded shadow-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                    <a href="/galeri/foto" class="bgdropdown">Foto</a>
                    <a href="/galeri/video" class="bgdropdown">Video</a>
                </div>
            </div>

            <i class="fa-solid fa-magnifying-glass text-white"></i>
        </div>

        <!-- Hamburger Menu (Mobile) -->
        <div class="md:hidden flex items-center">
            <button @click="menuOpen = !menuOpen" class="text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
<div x-show="menuOpen" x-transition x-cloak class="md:hidden bg-blue-700 text-white p-4 space-y-4 absolute w-full left-0 top-16 shadow-lg">
    <a href="/" class="block hover:underline {{ $activePage === 'home' ? 'underline' : '' }}">Beranda</a>

    <!-- Profile Dropdown Mobile -->
    <div x-data="{ open: false }" class="relative">
        <button @click="open = !open" class="flex justify-between items-center w-full text-left py-2">
            Profile <i class="fa-solid fa-chevron-down ml-2" :class="{ 'rotate-180': open }"></i>
        </button>
        <div x-show="open" x-transition x-cloak 
            class="absolute left-0 w-full bg-white text-black rounded shadow-md opacity-0 invisible transition-all duration-300"
            :class="{ 'opacity-100 visible': open, 'opacity-0 invisible': !open }">
            <a href="/profile?scroll=visi-misi" class="block px-4 py-2 hover:bg-gray-100">Visi & Misi</a>
            <a href="/profile?scroll=struktur" class="block px-4 py-2 hover:bg-gray-100">Struktur Organisasi</a>
        </div>
    </div>

    <a href="/layanan" class="block hover:underline {{ $activePage === 'layanan' ? 'underline' : '' }}">Layanan</a>

    <!-- Dokumen Dropdown Mobile -->
    <div x-data="{ open: false }" class="relative">
        <button @click="open = !open" class="flex justify-between items-center w-full text-left py-2">
            Dokumen <i class="fa-solid fa-chevron-down ml-2" :class="{ 'rotate-180': open }"></i>
        </button>
        <div x-show="open" x-transition x-cloak 
            class="absolute left-0 w-full bg-white text-black rounded shadow-md opacity-0 invisible transition-all duration-300"
            :class="{ 'opacity-100 visible': open, 'opacity-0 invisible': !open }">
            <a href="/dokumen/laporan" class="block px-4 py-2 hover:bg-gray-100">Laporan</a>
            <a href="/dokumen/publikasi" class="block px-4 py-2 hover:bg-gray-100">Publikasi</a>
        </div>
    </div>

    <!-- Peraturan Dropdown Mobile -->
    <div x-data="{ open: false }" class="relative">
        <button @click="open = !open" class="flex justify-between items-center w-full text-left py-2">
            Peraturan <i class="fa-solid fa-chevron-down ml-2" :class="{ 'rotate-180': open }"></i>
        </button>
        <div x-show="open" x-transition x-cloak 
            class="absolute left-0 w-full bg-white text-black rounded shadow-md opacity-0 invisible transition-all duration-300"
            :class="{ 'opacity-100 visible': open, 'opacity-0 invisible': !open }">
            <a href="/peraturan/daerah" class="block px-4 py-2 hover:bg-gray-100">Peraturan Daerah</a>
            <a href="/peraturan/nasional" class="block px-4 py-2 hover:bg-gray-100">Peraturan Nasional</a>
        </div>
    </div>

    <!-- Galeri Dropdown Mobile -->
    <div x-data="{ open: false }" class="relative">
        <button @click="open = !open" class="flex justify-between items-center w-full text-left py-2">
            Galeri <i class="fa-solid fa-chevron-down ml-2" :class="{ 'rotate-180': open }"></i>
        </button>
        <div x-show="open" x-transition x-cloak 
            class="absolute left-0 w-full bg-white text-black rounded shadow-md opacity-0 invisible transition-all duration-300"
            :class="{ 'opacity-100 visible': open, 'opacity-0 invisible': !open }">
            <a href="/galeri/foto" class="block px-4 py-2 hover:bg-gray-100">Foto</a>
            <a href="/galeri/video" class="block px-4 py-2 hover:bg-gray-100">Video</a>
        </div>
    </div>
</div>

</nav>
