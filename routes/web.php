<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\mapelController;
use App\Http\Controllers\jurusanController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\LoginController;

// Rute untuk menampilkan halaman login (di rute utama '/')
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');

// Rute untuk menangani proses login
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Rute yang dilindungi oleh middleware 'auth' (hanya bisa diakses setelah login)
Route::middleware('auth')->group(function () {
    // Halaman dashboard yang Anda inginkan
    Route::get('/dashboard', function () {
        return view('layout.sourcelayout');
    })->name('dashboard');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('dataguru',function(){
        return view('guru.dataguru');
    });

    Route::get('/guru', [GuruController::class, 'index']);
    Route::get('/siswa', [SiswaController::class, 'index']);
    Route::get('/kelas', [KelasController::class, 'index']);
    Route::get('/mapel', [mapelController::class, 'index']);
    Route::get('/jurusan', [jurusanController::class, 'index']);

    Route::prefix('admin')->group(function () {
        Route::get('/users', [SuperadminController::class, 'users']);
    });

    Route::prefix('users')->group(function () {
        Route::get('/index', [UsersController::class, 'index']);
        Route::get('/create', [UsersController::class, 'create']);
    });

    Route::get('/datasiswa', [SiswaController::class, 'index']);

    Route::resource('siswa', SiswaController::class);
});
