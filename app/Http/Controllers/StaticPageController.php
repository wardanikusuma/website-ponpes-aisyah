<?php

namespace App\Http\Controllers;

use App\Models\KontenYayasan;
use App\Models\KontenBerita;
use App\Models\KontenPrestasi;
use App\Models\KontenEskul;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    // 1. Beranda
    public function beranda()
    {
        $yayasan = KontenYayasan::first();
        $berita = KontenBerita::latest()->take(3)->get();
        $prestasi = KontenPrestasi::latest()->take(4)->get();
        return view('pages.beranda', compact('yayasan', 'berita', 'prestasi'));
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
        $berita = KontenBerita::latest()->get();
        $prestasi = KontenPrestasi::latest()->get();
        $eskul = KontenEskul::latest()->get();
        return view('pages.kesiswaan', compact('berita', 'prestasi', 'eskul'));
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

    public function lainnya()
    {
        return view('pages.lainnya');
    }
}
