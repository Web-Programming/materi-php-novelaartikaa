<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MateriController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('login', [
        'name' => 'Novela Artika Sari Devi',
        'email' => 'novelaartika@gmail.com',
        'alamat' => 'Sukabangun II'
]
);
});
Route::get('/berita/{id}/{judul?}', function ($id, $judul = judul) {
    return view('berita', ['id' => $id, 'judul' => $judul]);
});

Route::get('/prodi/index', [ProdiController::class, 'index']);
Route::resource('prodi', ProdiController::class);
Route::resource('fakultas', FakultasController::class);
Route::resource('mhs', MahasiswaController::class); // ganti dari 'mahasiswa' ke 'mhs'
Route::resource('dosen', DosenController::class);