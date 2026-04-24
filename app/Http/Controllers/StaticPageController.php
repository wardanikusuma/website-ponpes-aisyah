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
    public function profil()
    {
        return view('pages.tentang.profil');
    }
    public function visiMisi()
    {
        return view('pages.tentang.visi-misi');
    }
    public function sejarah()
    {
        return view('pages.tentang.sejarah');
    }
    public function akreditasi()
    {
        return view('pages.tentang.akreditasi');
    }

    // Menu Akademik
    public function akademik()
    {
        return view('pages.akademik');
    }

    // Menu Kesiswaan (Dropdown)
    public function prestasi()
    {
        return view('pages.kesiswaan.prestasi');
    }
    public function ekskul()
    {
        return view('pages.kesiswaan.ekstrakurikuler');
    }
    public function berita()
    {
        return view('pages.kesiswaan.berita');
    }

    // Fallback jika kesiswaan diakses tanpa sub-menu
    public function kesiswaan()
    {
        return view('pages.kesiswaan.berita');
    }
}
