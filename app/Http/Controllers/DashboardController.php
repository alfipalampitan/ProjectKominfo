<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\berita;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Data jumlah user berdasarkan role
        $usersData = [
            'admin' => User::where('role', 'admin')->count(),
            'user' => User::where('role', 'user')->count(),
        ];

        $categoryColors = [
            'Teknologi' => 'bg-green',
            'Politik' => 'text-blue-500',
            'Olahraga' => 'text-red-600',
            'Hiburan' => 'bg-blue',
            'Umum' => 'bg-orange',
        ];

        // Total jumlah berita
        $totalBerita = berita::count();

        // Hitung berita berdasarkan kategori
        $categories = ['Teknologi', 'Politik', 'Olahraga', 'Hiburan', 'Umum'];
        $newsByCategory = [];

        foreach ($categories as $category) {
            $newsByCategory[$category] = berita::where('category', $category)->count();
        }

        return view('admin.dashboard', compact('usersData', 'totalBerita', 'newsByCategory', 'categories','categoryColors'));
    }
}
