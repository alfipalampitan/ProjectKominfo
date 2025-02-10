<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/beranda', function () {
    return view('home',['title' => 'Beranda']);
});
Route::get('/profile', function () {
    return view('profile',['title' => 'Profile']);
});
Route::get('/informasi', function () {
    return view('informasi',['title' => 'informasi']);
});
Route::get('/galeri', function () {
    return view('galeri',['title' => 'galeri']);
});
