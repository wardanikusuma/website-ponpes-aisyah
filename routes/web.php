<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPageController;

/*
|--------------------------------------------------------------------------
| Web Routes - PP Aisyah Samawa
|--------------------------------------------------------------------------
*/

// 1. ROUTE BERANDA
// Pastikan name-nya 'home' agar cocok dengan route('home') di navbar
Route::get('/', [StaticPageController::class, 'beranda'])->name('home');

// 2. TENTANG (Single Page dengan Anchor)
// Route utama untuk halaman Tentang
Route::get('/tentang', [StaticPageController::class, 'tentang'])->name('tentang');

// Sub-route untuk dropdown (akan melakukan redirect ke anchor/ID di halaman tentang)
Route::prefix('tentang')->group(function () {
    Route::get('/profil', [StaticPageController::class, 'profil'])->name('tentang.profil');
    Route::get('/visi-misi', [StaticPageController::class, 'visiMisi'])->name('tentang.visi-misi');
    Route::get('/sejarah', [StaticPageController::class, 'sejarah'])->name('tentang.sejarah');
    Route::get('/akreditasi', [StaticPageController::class, 'akreditasi'])->name('tentang.akreditasi');
});

// 3. ROUTE AKADEMIK
Route::get('/akademik', [StaticPageController::class, 'akademik'])->name('akademik');

// 4. KESISWAAN (Single Page dengan Anchor)
// Route utama untuk halaman Kesiswaan
Route::get('/kesiswaan', [StaticPageController::class, 'kesiswaan'])->name('kesiswaan');

// Sub-route untuk dropdown (akan melakukan redirect ke anchor/ID di halaman kesiswaan)
Route::prefix('kesiswaan')->group(function () {
    Route::get('/prestasi', [StaticPageController::class, 'prestasi'])->name('kesiswaan.prestasi');
    Route::get('/ekstrakurikuler', [StaticPageController::class, 'ekskul'])->name('kesiswaan.ekskul');
    Route::get('/berita', [StaticPageController::class, 'berita'])->name('kesiswaan.berita');
});

// 5. ROUTE PENDAFTARAN (PPDB ONLINE)
Route::prefix('ppdb')->group(function () {
    Route::get('/', [App\Http\Controllers\PendaftaranController::class, 'landing'])->name('ppdb.landing');
    Route::get('/daftar/paud', [App\Http\Controllers\PendaftaranController::class, 'createPaud'])->name('ppdb.daftar.paud');
    Route::post('/daftar/paud', [App\Http\Controllers\PendaftaranController::class, 'storePaud']);
    Route::get('/daftar/sekolah', [App\Http\Controllers\PendaftaranController::class, 'createSekolah'])->name('ppdb.daftar.sekolah');
    Route::post('/daftar/sekolah', [App\Http\Controllers\PendaftaranController::class, 'storeSekolah']);
    Route::get('/success', [App\Http\Controllers\PendaftaranController::class, 'success'])->name('ppdb.success');
});


Route::get('/lainnya', [StaticPageController::class, 'lainnya'])->name('lainnya');
