<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <title>@yield('title')</title>
</head>
<body class="{{ session('background', 'bg-slate-500') }}">
    <div x-data="{ open: false }" class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div :class="open ? 'translate-x-0' : '-translate-x-full'" class="fixed md:static md:translate-x-0 w-64 h-full bg-blue-500 text-white p-5 flex flex-col justify-between top-0 left-0 z-50 transition-transform duration-300 overflow-y-auto">
            <div>
                <h2 class="text-xl font-bold">Admin Panel</h2>
                <ul class="mt-5">
                    <a href="{{ route('admin.dashboard') }}"><li class="py-2 px-4 hover:bg-blue-300 rounded">Dashboard</li></a>
                    <a href="{{ route('admin.landing') }}"><li class="py-2 px-4 hover:bg-blue-300 rounded">Header Build</li></a>
                    <a href="{{ route('admin.Agenda') }}"><li class="py-2 px-4 hover:bg-blue-300 rounded">Agenda Build</li></a>
                    <a href="{{ route('admin.Berita') }}"><li class="py-2 px-4 hover:bg-blue-300 rounded">Berita Build</li></a>
                    <a href="{{ route('admin.users') }}"><li class="py-2 px-4 hover:bg-blue-300 rounded">User</li></a>
                    <a href="{{ route('admin.settings') }}"><li class="py-2 px-4 hover:bg-blue-300 rounded">Settings</li></a>
                </ul>
            </div>
            <form method="POST" action="{{ route('logout') }}" class="mt-5">
                @csrf
                <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded">
                    Logout
                </button>
            </form>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 flex flex-col min-h-screen overflow-y-auto">
            <!-- Navbar -->
            <div class="bg-blue-600 text-white p-4 shadow-md flex justify-between items-center sticky top-0 z-40">
                <button @click="open = !open" class="md:hidden text-white text-2xl">&#9776;</button>
                <h1 class="text-xl font-bold text-center w-full md:w-auto">@yield('header')</h1>
            </div>
            <!-- Content -->
            <div class="p-5 md:p-10">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>



{{-- ini adalah pilihan yang kedua --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" defer></script>
    <title>@yield('title')</title>
</head>
<body class="bg-gray-100">
    <!-- Sidebar dengan Alpine.js -->
    <div x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false" class="fixed h-full bg-blue-500 text-white p-5 flex flex-col justify-between top-0 left-0 z-50 transition-all duration-300" :class="open ? 'w-64' : 'w-16'">
        <div>
            <!-- Logo atau Toggle Button -->
            <div class="flex items-center justify-center cursor-pointer mb-5" @click="open = !open">
                <i class="fas fa-bars text-2xl"></i>
            </div>
            <ul>
                <a href="{{ route('admin.dashboard') }}">
                    <li class="py-2  flex items-center space-x-2 hover:bg-blue-300 rounded">
                        <span class="w-6"></span>
                        <span x-show="open" class="transition-opacity duration-300">Dashboard</span>
                    </li>
                </a>
                <a href="{{ route('admin.landing') }}">
                    <li class="py-2 flex items-center space-x-2 hover:bg-blue-300 rounded">
                        <span class="w-6"></span>
                        <span x-show="open">Header Build</span>
                    </li>
                </a>
                <a href="{{ route('admin.Agenda') }}">
                    <li class="py-2 flex items-center space-x-2 hover:bg-blue-300 rounded">
                        <span class="w-6"></span>
                        <span x-show="open">Agenda Build</span>
                    </li>
                </a>
                <a href="{{ route('admin.Berita') }}">
                    <li class="py-2 flex items-center space-x-2 hover:bg-blue-300 rounded">
                        <span class="w-6"></span>
                        <span x-show="open">Berita Build</span>
                    </li>
                </a>
                <a href="{{ route('admin.users') }}">
                    <li class="py-2 flex items-center space-x-2 hover:bg-blue-300 rounded">
                        <span class="w-6"></span>
                        <span x-show="open">User</span>
                    </li>
                </a>
                <a href="{{ route('admin.settings') }}">
                    <li class="py-2 flex items-center space-x-2 hover:bg-blue-300 rounded">
                        <span class="w-6"></span>
                        <span x-show="open">Settings</span>
                    </li>
                </a>
            </ul>
        </div>
        
        <!-- Logout Button, disembunyikan saat sidebar tertutup -->
        <form method="POST" action="{{ route('logout') }}" class="mt-5" x-show="open" x-transition>
            @csrf
            <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded">
                Logout
            </button>
        </form>
    </div>
    
    <!-- Main Content -->
    <div class="transition-all duration-300" :class="open ? 'ml-64' : 'ml-16'">
        <!-- Navbar di atas konten, full bg saat sidebar tertutup -->
        <div class="fixed w-full bg-blue-600 text-white p-4 shadow-md transition-all duration-300" :class="open ? '' : 'w-full'">
            <h1 class="text-xl font-bold text-center">@yield('header')</h1>
        </div>
        <!-- Konten Halaman -->
        <div class="p-10">
            @yield('content')
        </div>
    </div>
</body>
</html> --}}

