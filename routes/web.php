<?php

use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticPageController::class, 'beranda'])->name('home');
Route::get('/tentang', [StaticPageController::class, 'tentang'])->name('tentang');
Route::get('/akademik', [StaticPageController::class, 'akademik'])->name('akademik');
Route::get('/kesiswaan', [StaticPageController::class, 'kesiswaan'])->name('kesiswaan');
