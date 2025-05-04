<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\ProdiController;

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