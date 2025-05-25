<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('login', function () {
//     return view('login', [
//         'name' => 'Novela Artika Sari Devi',
//         'email' => 'novelaartika@gmail.com',
//         'alamat' => 'Sukabangun II'
// ]
// );
// });
// Route::get('/berita/{id}/{judul?}', function ($id, $judul = judul) {
//     return view('berita', ['id' => $id, 'judul' => $judul]);
// });

#route materi
Route::get('/prodi/index', [ProdiController::class, 'index']);
Route::resource('prodi', ProdiController::class);
Route::resource('fakultas', FakultasController::class);
Route::resource('mhs', MahasiswaController::class); // ganti dari 'mahasiswa' ke 'mhs'
Route::resource('dosen', DosenController::class);

// authentication
Route::get("/login", [AuthController::class, 'login'])->name('login');
Route::post("/login", [AuthController::class, 'do_login']);
Route::get("/register", [AuthController::class, 'register']);
Route::post("/register", [AuthController::class, 'do_register']);
Route::get("/logout", [AuthController::class, 'logout']);

Route::get("/admin", [AdminController::class, 'index'])
    ->middleware(middleware: CekLogin::class.":admin");
Route::get("/user", [UserController::class, 'index'])
    ->middleware(middleware: CekLogin::class.":user");
