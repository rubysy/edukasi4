<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\KonsultanController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\LmsController;
use App\Http\Controllers\AplikasiController;

// Main pages - using controllers
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::get('/mitra', [MitraController::class, 'index'])->name('mitra');
Route::get('/lms', [LmsController::class, 'index'])->name('lms');
Route::get('/aplikasi', [AplikasiController::class, 'index'])->name('aplikasi');

// Static pages - no database needed
Route::view('/layanan', 'layanan')->name('layanan');
Route::view('/kontak', 'kontak')->name('kontak');

// Sub-layanan pages - using controllers for dynamic content
Route::get('/pelatihan', [PelatihanController::class, 'index']);
Route::get('/konsultan', [KonsultanController::class, 'index']);

// Static sub-layanan pages
Route::view('/platform_pendidikan', 'layanan.platform_pendidikan');