<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('halo', function () {
    return "Halo, Selamat Datang Di Web saya";
});
Route::get('blog', [BlogController::class, 'home']);
Route::get('blog/tentang', [BlogController::class, 'tentang']);
Route::get('blog/kontak', [BlogController::class, 'kontak']);

Route::get('dosen', [DosenController::class, 'index']);
Route::get('formulir', [PegawaiController::class, 'formulir']);
Route::post('formulir/proses', [PegawaiController::class, 'Proses']);

Route::get('pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
