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


Route::get('/lainnya', [StaticPageController::class, 'lainnya'])->name('lainnya');

// Auth Routes
Route::prefix('auth')->group(function () {
    Route::get('/login', [App\Http\Controllers\Auth\AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [App\Http\Controllers\Auth\AuthController::class, 'login']);
    Route::post('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');
});

// Super Admin Routes
Route::middleware(['auth:super_admin', 'role.super_admin'])->prefix('superadmin')->name('superadmin.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\SuperAdmin\SuperAdminController::class, 'index'])->name('dashboard');
    Route::post('/toggle-registration/{jenjang}', [App\Http\Controllers\SuperAdmin\SuperAdminController::class, 'toggleRegistration'])->name('toggle-registration');
    
    // Admin Management
    Route::resource('admin', App\Http\Controllers\SuperAdmin\AdminAccountController::class);
    
    // Tendik Management
    Route::resource('tendik', App\Http\Controllers\SuperAdmin\TendikAccountController::class);
    
    // Content Management
    Route::get('/konten/{section}', [App\Http\Controllers\SuperAdmin\ContentController::class, 'edit'])->name('konten.edit');
    Route::put('/konten/{section}', [App\Http\Controllers\SuperAdmin\ContentController::class, 'update'])->name('konten.update');
    Route::delete('/konten/{section}/{id}', [App\Http\Controllers\SuperAdmin\ContentController::class, 'destroy'])->name('konten.destroy');
});

// Admin Routes
Route::middleware(['auth:admin', 'role.admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');
    Route::get('/pendaftar', [App\Http\Controllers\Admin\PendaftarController::class, 'index'])->name('pendaftar.index');
    Route::get('/pendaftar/{id}', [App\Http\Controllers\Admin\PendaftarController::class, 'show'])->name('pendaftar.show');
    
    // Selection Process
    Route::put('/seleksi/{id}/administrasi', [App\Http\Controllers\Admin\SeleksiController::class, 'administrasi'])->name('seleksi.administrasi');
    Route::put('/seleksi/{id}/setup-akademik', [App\Http\Controllers\Admin\SeleksiController::class, 'setupAkademik'])->name('seleksi.setup-akademik');
    Route::put('/pendaftar/{id}/setup-akademik', [App\Http\Controllers\Admin\SeleksiController::class, 'setupAkademik'])->name('setup-akademik');
    Route::put('/pendaftar/{id}/setup-wawancara', [App\Http\Controllers\Admin\SeleksiController::class, 'setupWawancara'])->name('setup-wawancara');
    Route::put('/pendaftar/{id}/setup-alquran', [App\Http\Controllers\Admin\SeleksiController::class, 'setupAlquran'])->name('setup-alquran');
    Route::put('/seleksi/{id}/nilai-akademik', [App\Http\Controllers\Admin\SeleksiController::class, 'nilaiAkademik'])->name('seleksi.nilai-akademik');
    Route::put('/seleksi/{id}/setup-wawancara', [App\Http\Controllers\Admin\SeleksiController::class, 'setupWawancara'])->name('seleksi.setup-wawancara');
    Route::put('/seleksi/{id}/nilai-wawancara', [App\Http\Controllers\Admin\SeleksiController::class, 'nilaiWawancara'])->name('seleksi.nilai-wawancara');
    Route::put('/seleksi/{id}/setup-alquran', [App\Http\Controllers\Admin\SeleksiController::class, 'setupAlquran'])->name('seleksi.setup-alquran');
    Route::put('/seleksi/{id}/nilai-alquran', [App\Http\Controllers\Admin\SeleksiController::class, 'nilaiAlquran'])->name('seleksi.nilai-alquran');
    Route::put('/seleksi/{id}/kelulusan-akhir', [App\Http\Controllers\Admin\SeleksiController::class, 'kelulusanAkhir'])->name('seleksi.kelulusan-akhir');
    Route::post('/seleksi/umumkan-hasil', [App\Http\Controllers\Admin\SeleksiController::class, 'umumkanHasil'])->name('seleksi.umumkan-hasil');
    Route::post('/seleksi/umumkan-tahap', [App\Http\Controllers\Admin\SeleksiController::class, 'umumkanTahap'])->name('seleksi.umumkan-tahap');
    Route::post('/seleksi/bulk-setup', [App\Http\Controllers\Admin\SeleksiController::class, 'bulkSetup'])->name('seleksi.bulk-setup');
    
    // Reports
    Route::get('/laporan/generate', [App\Http\Controllers\Admin\ReportController::class, 'generate'])->name('laporan.generate');
});

// Tendik Routes
Route::middleware(['auth:tendik', 'role.tendik'])->prefix('tendik')->name('tendik.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Tendik\TendikController::class, 'index'])->name('dashboard');
    Route::get('/jadwal-tugas', [App\Http\Controllers\Tendik\TaskController::class, 'index'])->name('tugas.index');
    Route::get('/seleksi/{id}/input-nilai/{type}', [App\Http\Controllers\Tendik\TaskController::class, 'inputNilai'])->name('tugas.input-nilai');
    Route::put('/seleksi/{id}/nilai/{type}', [App\Http\Controllers\Tendik\TaskController::class, 'storeNilai'])->name('tugas.store-nilai');
});

// Public Announcement
Route::get('/pengumuman/{jenjang}', [App\Http\Controllers\AnnouncementController::class, 'show'])->name('pengumuman');

// 5. ROUTE PENDAFTARAN (PPDB ONLINE)
Route::prefix('ppdb')->group(function () {
    Route::get('/', [App\Http\Controllers\PendaftaranController::class, 'landing'])->name('ppdb.landing');
    Route::get('/daftar/paud', [App\Http\Controllers\PendaftaranController::class, 'createPaud'])->name('ppdb.daftar.paud');
    Route::post('/daftar/paud', [App\Http\Controllers\PendaftaranController::class, 'storePaud']);
    Route::get('/daftar/sekolah', [App\Http\Controllers\PendaftaranController::class, 'createSekolah'])->name('ppdb.daftar.sekolah');
    Route::post('/daftar/sekolah', [App\Http\Controllers\PendaftaranController::class, 'storeSekolah']);
    Route::get('/success', [App\Http\Controllers\PendaftaranController::class, 'success'])->name('ppdb.success');
});
