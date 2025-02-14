<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/layanan', function () {
    return view('layanan',['title' => 'Layanan']);
});

Route::get('/profile', function () {
    return view('profile',['title' => 'profile']);
});


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.admin'); // Sesuaikan dengan lokasi file Blade
    })->name('admin.dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/landing-page', [LandingPageController::class, 'index'])->name('admin.landing');
    Route::post('/admin/landing-page/update', [LandingPageController::class, 'update'])->name('admin.landing.update');
});


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/users', function () {
        return view('admin.users');
    })->name('admin.users');

    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('admin.settings');

    Route::get('/upload', function () {
        return view('admin.upload');
    })->name('admin.upload');
});


require __DIR__.'/auth.php';

