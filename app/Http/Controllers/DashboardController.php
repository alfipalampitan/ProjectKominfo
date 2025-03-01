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

        // Total jumlah berita
        $totalBerita = berita::count();

        // Hitung berita berdasarkan kategori
        $categories = ['Teknologi', 'Politik', 'Olahraga', 'Hiburan', 'Umum'];
        $newsByCategory = [];

        foreach ($categories as $category) {
            $newsByCategory[$category] = berita::where('category', $category)->count();
        }

        return view('admin.dashboard', compact('usersData', 'totalBerita', 'newsByCategory', 'categories'));
    }
}
