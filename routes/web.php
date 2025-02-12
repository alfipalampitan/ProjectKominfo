<?php

use App\Http\Controllers\ProfileController;
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


require __DIR__.'/auth.php';

