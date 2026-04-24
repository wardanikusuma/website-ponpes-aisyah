<?php

use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticPageController::class, 'beranda'])->name('home');
Route::prefix('tentang')->group(function () {
    Route::get('/', [StaticPageController::class, 'profil'])->name('tentang');
    Route::get('/profil', [StaticPageController::class, 'profil'])->name('tentang.profil');
    Route::get('/visi-misi', [StaticPageController::class, 'visiMisi'])->name('tentang.visi-misi');
    Route::get('/sejarah', [StaticPageController::class, 'sejarah'])->name('tentang.sejarah');
    Route::get('/akreditasi', [StaticPageController::class, 'akreditasi'])->name('tentang.akreditasi');
});
Route::get('/akademik', [StaticPageController::class, 'akademik'])->name('akademik');
Route::get('/kesiswaan', [StaticPageController::class, 'kesiswaan'])->name('kesiswaan');
