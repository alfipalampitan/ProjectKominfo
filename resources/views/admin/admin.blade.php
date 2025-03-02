<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>

</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="fixed w-64 h-full bg-blue-500 text-white p-5 flex flex-col justify-between top-0 left-0 z-50">
        <div>
            <h2 class="text-xl font-bold">Admin Panel</h2>
            <ul class="mt-5">
                <a href="{{ route('admin.dashboard') }}"><li class="py-2 px-4 hover:bg-blue-300 rounded noactive">Dashboard</li></a> 
                <a href="{{ route('admin.landing') }}">
                    <li class="py-2 px-4 hover:bg-blue-300 rounded noactive">Header Build</li>
                </a>                                                      
                <a href="{{ route('admin.Agenda') }}">
                    <li class="py-2 px-4 hover:bg-blue-300 rounded noactive">Agenda Build</li>
                </a>                                                      
                <a href="{{ route('admin.Berita') }}">
                    <li class="py-2 px-4 hover:bg-blue-300 rounded noactive">Berita Build</li>
                </a>                                                      
                <a href="{{ route('admin.users') }}"><li class="py-2 px-4 hover:bg-blue-300 rounded noactive">User</li></a> 
                <a href="{{ route('admin.settings') }}"><li class="py-2 px-4 hover:bg-blue-300 rounded noactive">Settings</li></a> 
            </ul>
        </div>

        <!-- Logout Button -->
        <form method="POST" action="{{ route('logout') }}" class="mt-5">
            @csrf
            <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded">
                Logout
            </button>
        </form>
    </div>
    
    <!-- Main Content -->
    <div class="ml-64 flex-1 flex flex-col min-h-screen">
        <!-- Navbar di atas konten -->
        <div class="fixed w-full bg-blue-600 text-white p-4 shadow-md">
            <h1 class="text-xl font-bold text-center">@yield('header')</h1>
        </div>

        <!-- Konten Halaman -->
        <div class="p-10">
            @yield('content')
        </div>
    </div>
</body>
</html>
