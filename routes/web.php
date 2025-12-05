<?php

use App\Http\Controllers\BelajarController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DikiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NotifController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blog');
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
Route::get('pegawai/cetak_pdf', [PegawaiController::class, 'cetak_pdf']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);

Route::get('/input', [BelajarController::class, 'input']);
Route::post('/proses', [BelajarController::class, 'proses']);

Route::get('/guru', [GuruController::class, 'index']);
Route::get('/guru/hapus/{id}', [GuruController::class, 'hapus']);
Route::get('/guru/trash', [GuruController::class, 'trash']);
Route::get('/guru/kembalikan/{id}', [GuruController::class, 'kembalikan']);
Route::get('/guru/kembalikan_semua', [GuruController::class, 'kembalikan_semua']);
Route::get('/guru/hapus_permanen/{id}', [GuruController::class, 'hapus_permanen']);
Route::get('/guru/hapus_permanen_semua', [GuruController::class, 'hapus_permanen_semua']);

Route::get('/pengguna', [PenggunaController::class, 'index']);

Route::get('/article', [WebController::class, 'index']);

Route::get('/anggota', [DikiController::class, 'index']);

Route::get('/pesan', [NotifController::class, 'index']);
Route::get('/pesan/sukses', [NotifController::class, 'sukses']);
Route::get('/pesan/warning', [NotifController::class, 'warning']);
Route::get('/pesan/gagal', [NotifController::class, 'gagal']);


Route::get('/error', [ErrorController::class, 'index']);
Route::get('/error/{nama}', [ErrorController::class, 'index']);

Route::get('/kirimemail', [MailController::class, 'index']);

Route::get('/{locale}/form', function ($locale) {
    App::setLocale($locale);
    return view('biodata');
});
Route::get('/form', function () {
    return view('biodata');
});

Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/export', [SiswaController::class, 'export']);
Route::post('/siswa/import', [SiswaController::class, 'import']);
