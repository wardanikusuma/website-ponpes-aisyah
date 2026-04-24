<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPageController;

// 1. ROUTE BERANDA (Ini yang bikin error kalau ->name('home') nya tidak ada)
Route::get('/', [StaticPageController::class, 'beranda'])->name('home');
Route::get('/tentang', [StaticPageController::class, 'tentang'])->name('tentang');
Route::permanentRedirect('/tentang/profil', '/tentang#profil');
Route::permanentRedirect('/tentang/visi-misi', '/tentang#visi');
Route::permanentRedirect('/tentang/sejarah', '/tentang#sejarah');
Route::permanentRedirect('/tentang/akreditasi', '/tentang#akreditasi');

// 3. ROUTE AKADEMIK
Route::get('/akademik', [StaticPageController::class, 'akademik'])->name('akademik');

// 4. GROUP KESISWAAN
Route::prefix('kesiswaan')->group(function () {
    Route::get('/prestasi', [StaticPageController::class, 'prestasi'])->name('kesiswaan.prestasi');
    Route::get('/ekstrakurikuler', [StaticPageController::class, 'ekskul'])->name('kesiswaan.ekskul');
    Route::get('/berita', [StaticPageController::class, 'berita'])->name('kesiswaan.berita');
});
