<?php

use App\Models\berita;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\beritacontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/layanan', function () {
    return view('layanan',['title' => 'Layanan']);
});

Route::get('/profile', function () {
    return view('profile',['title' => 'profile']);
});

// Route::middleware(['auth'])->group(function () {
//     Route::get('/admin', function () {
//         return view('admin.dashboard'); // Sesuaikan dengan lokasi file Blade
//     })->name('admin.dashboard');
// });

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/landing-page', [LandingPageController::class, 'index'])->name('admin.landing');
    Route::post('/admin/landing-page/update', [LandingPageController::class, 'update'])->name('admin.landing.update');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/agenda', [AgendaController::class, 'agendaIndex'])->name('admin.Agenda');
    Route::post('/admin/agenda/update', [AgendaController::class, 'agendaUpdate'])->name('admin.agenda.update');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/berita', [beritacontroller::class, 'index'])->name('admin.Berita');
    Route::post('/berita', [beritacontroller::class, 'store'])->name('admin.berita.store');
    Route::patch('/news/{id}/trending', [beritacontroller::class, 'toggleTrending'])->name('admin.berita.trending');
});

Route::get('/trending-Berita', function () {
    return response()->json(berita::where('is_trending', true)->get());
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('admin.users');
    Route::post('/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
});

Route::delete('/admin/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    // Route::post('/users', [UserController::class, 'store'])->name('admin.users.store');
    // Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
});




Route::prefix('admin')->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('admin.dashboard');
    // })->name('admin.dashboard');

    // Route::get('/users', function () {
    //     return view('admin.users');
    // })->name('admin.users');

    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('admin.settings');

    Route::get('/upload', function () {
        return view('admin.upload');
    })->name('admin.upload');
});


require __DIR__.'/auth.php';

