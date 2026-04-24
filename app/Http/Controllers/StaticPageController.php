<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    // Menggunakan pages.beranda sesuai nama file kamu
    public function beranda()
    {
        return view('pages.beranda');
    }

    // Menu Tentang
    public function tentang()
    {
        return view('pages.tentang');
    }

    public function profil()
    {
        // Karena sub-halaman belum ada, arahkan ke halaman utama tentang
        return redirect()->route('tentang', ['#profil']);
    }
    public function visiMisi()
    {
        return redirect()->route('tentang', ['#visi']);
    }
    public function sejarah()
    {
        return redirect()->route('tentang', ['#sejarah']);
    }
    public function akreditasi()
    {
        return redirect()->route('tentang', ['#akreditasi']);
    }

    // Menu Akademik
    public function akademik()
    {
        // Cek jika view ada, jika tidak kembalikan ke beranda atau buat stub
        if (view()->exists('pages.akademik')) {
            return view('pages.akademik');
        }
        return view('pages.beranda'); // Fallback sementara
    }

    // Menu Kesiswaan (Dropdown)
    public function kesiswaan()
    {
        if (view()->exists('pages.kesiswaan.berita')) {
            return view('pages.kesiswaan.berita');
        }
        return view('pages.beranda'); // Fallback sementara
    }

    public function prestasi()
    {
        return view('pages.beranda');
    }
    public function ekskul()
    {
        return view('pages.beranda');
    }
    public function berita()
    {
        return view('pages.beranda');
    }
}
