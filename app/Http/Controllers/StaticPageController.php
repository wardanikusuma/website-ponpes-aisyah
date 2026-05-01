<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    // 1. Beranda
    public function beranda()
    {
        return view('pages.beranda');
    }

    // 2. Menu Tentang (Single Page)
    public function tentang()
    {
        return view('pages.tentang');
    }

    public function profil()
    {
        return redirect()->to(route('tentang') . '#profil');
    }

    public function visiMisi()
    {
        return redirect()->to(route('tentang') . '#visi');
    }

    public function sejarah()
    {
        return redirect()->to(route('tentang') . '#sejarah');
    }

    public function akreditasi()
    {
        return redirect()->to(route('tentang') . '#akreditasi');
    }

    // 3. Menu Akademik
    public function akademik()
    {
        if (view()->exists('pages.akademik')) {
            return view('pages.akademik');
        }
        return view('pages.beranda');
    }

    // 4. Menu Kesiswaan (Single Page)
    public function kesiswaan()
    {
        return view('pages.kesiswaan');
    }

    public function prestasi()
    {
        return redirect()->to(route('kesiswaan') . '#prestasi');
    }

    public function ekskul()
    {
        return redirect()->to(route('kesiswaan') . '#ekstrakurikuler');
    }

    public function berita()
    {
        return redirect()->to(route('kesiswaan') . '#berita');
    }
}
