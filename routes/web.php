<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('halo', function () {
    return "Halo, Selamat Datang Di Web saya";
});
Route::get('blog', function () {
    return view('blog');
});

Route::get('dosen', 'DosenController@index');
