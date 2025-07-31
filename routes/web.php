<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/profil', 'profil')->name('profil');
Route::view('/layanan', 'layanan')->name('layanan');
Route::view('/mitra', 'mitra')->name('mitra');
Route::view('/kontak', 'kontak')->name('kontak');

Route::view('/pelatihan', 'layanan.pelatihan');
Route::view('/lms', 'layanan.lms');
Route::view('/konsultan', 'layanan.konsultan');
Route::view('/aplikasi', 'layanan.aplikasi');
Route::view('/platform_pendidikan', 'layanan.platform_pendidikan');
