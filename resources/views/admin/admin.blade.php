<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Admin Dashboard</title>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-blue-500 text-white p-5 flex flex-col justify-between">
            <div>
                <h2 class="text-xl font-bold">Admin Panel</h2>
                <ul class="mt-5">
                    <a href="#"><li class="py-2 px-4 hover:bg-blue-300 rounded noactive">Dashboard</li></a> 
                    <a href="/home"><li class="py-2 px-4 hover:bg-blue-300 rounded noactive">Landing Page</li></a> 
                    <a href="#"><li class="py-2 px-4 hover:bg-blue-300 rounded noactive">User</li></a> 
                    <a href="#"><li class="py-2 px-4 hover:bg-blue-300 rounded noactive">Settings</li></a> 
                    <a href="#"><li class="py-2 px-4 hover:bg-blue-300 rounded noactive">Upload</li></a> 
                    
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
        <div class="flex-1 p-10">
            <h1 class="text-2xl font-semibold">Hai sanak yang hanyar datang di dashboard anak banua</h1>
            <p class="mt-2 text-gray-600">This is the main admin panel where you can manage content. anjay pakai bahasa inggris dikit intinya disini gasan pian me manajemen konten website pian</p>
        </div>
    </div>
</body>
</html>
