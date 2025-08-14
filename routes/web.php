<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\mapelController;
use App\Http\Controllers\jurusanController;
use App\Http\Controllers\UsersController;

Route::get('/template', function () {
    return view('index');
});

Route::get('/', function () {
    return view('layout.sourcelayout');
});

Route::get('dataguru',function(){
    return view('guru.dataguru');
});

// Route::get('datasiswa',function(){
//     return view('Data.datasiswa');
// });

// Route::get('datakelas',function(){
//     return view('Data.datakelas');
// });

// Route::get('datajurusan',function(){
//     return view('Data.datajurusan');
// });

// Route::get('datamapel',function(){
//     return view('Data.datamapel');
// });

// Route::get('mengajar',function(){
//     return view('Data.mengajar');
// });

// Route::get('/user/{id}', function ($id) {
//     return "NAMA GW DZIKRI: " . $id;
// });

Route::get('/guru', [GuruController::class, 'index']);
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/mapel', [mapelController::class, 'index']);
Route::get('/jurusan', [jurusanController::class, 'index']);


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [SuperadminController::class, 'index']);
    Route::get('/users', [SuperadminController::class, 'users']);
});

Route::prefix('users')->group(function () {
    Route::get('/index', [UsersController::class, 'index']);
    Route::get('/create', [UsersController::class, 'create']);
});

Route::get('/datasiswa', [SiswaController::class, 'index']);

Route::resource('siswa', SiswaController::class);