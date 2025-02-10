<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home',['title' => 'Beranda']);
});
Route::get('/profile', function () {
    return view('profile',['title' => 'Profile']);
});
Route::get('/layanan', function () {
    return view('layanan',['title' => 'layanan']);
});
Route::get('/dokumen', function () {
    return view('dokumen',['title' => 'dokumen']);
});
Route::get('/peraturan', function () {
    return view('peraturan',['title' => 'peraturan']);
});
Route::get('/galeri', function () {
    return view('galeri',['title' => 'galeri']);
});
