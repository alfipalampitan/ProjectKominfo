<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $usersData = [
            'admin' => User::where('role', 'admin')->count(),
            'user' => User::where('role', 'user')->count(),
        ];

        return view('admin.dashboard', compact('usersData'));
    }
}
