<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/nilai', function () {
    return view('nilai');
});

// Tugas praktikum 11 Dokter
Route::get('/dokter', [DokterController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);
//pasien
Route::get('admin/pasien', [PasienController::class, 'index'])->name('pasiens.index');
Route::get('admin/pasien/create', [PasienController::class, 'create'])->name('pasiens.create');
Route::post('admin/pasien/store', [PasienController::class, 'store'])->name('pasiens.store');
Route::get('/admin/pasien/{pasien}', [PasienController::class, 'show'])->name('pasiens.show');
Route::delete('/admin/pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasiens.destroy');
//kelurahan
Route::get('admin/kelurahan', [KelurahanController::class, 'index'])->name('kelurahan.index');
Route::get('admin/kelurahan', [kelurahanController::class, 'index'])->name('kelurahans.index');
Route::get('admin/kelurahan/create', [kelurahanController::class, 'create'])->name('kelurahans.create');
Route::post('admin/kelurahan/store', [kelurahanController::class, 'store'])->name('kelurahans.store');
Route::get('/admin/kelurahan/{kelurahan}', [kelurahanController::class, 'show'])->name('kelurahans.show');
Route::delete('/admin/kelurahan/{kelurahan}', [kelurahanController::class, 'destroy'])->name('kelurahans.destroy');