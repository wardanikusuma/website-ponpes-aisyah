<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPageController;

// 1. ROUTE BERANDA (Ini yang bikin error kalau ->name('home') nya tidak ada)
Route::get('/', [StaticPageController::class, 'beranda'])->name('home');
<<<<<<< HEAD
Route::get('/tentang', [StaticPageController::class, 'tentang'])->name('tentang');
=======

// 2. GROUP TENTANG
Route::prefix('tentang')->group(function () {
    Route::get('/profil', [StaticPageController::class, 'profil'])->name('tentang.profil');
    Route::get('/visi-misi', [StaticPageController::class, 'visiMisi'])->name('tentang.visi-misi');
    Route::get('/sejarah', [StaticPageController::class, 'sejarah'])->name('tentang.sejarah');
    Route::get('/akreditasi', [StaticPageController::class, 'akreditasi'])->name('tentang.akreditasi');
});

// 3. ROUTE AKADEMIK
>>>>>>> main
Route::get('/akademik', [StaticPageController::class, 'akademik'])->name('akademik');

// 4. GROUP KESISWAAN
Route::prefix('kesiswaan')->group(function () {
    Route::get('/prestasi', [StaticPageController::class, 'prestasi'])->name('kesiswaan.prestasi');
    Route::get('/ekstrakurikuler', [StaticPageController::class, 'ekskul'])->name('kesiswaan.ekskul');
    Route::get('/berita', [StaticPageController::class, 'berita'])->name('kesiswaan.berita');
});
