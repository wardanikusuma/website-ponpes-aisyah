<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function beranda() { return view('pages.beranda'); }
    public function profil() { return view('pages.tentang.profil'); }
    public function visiMisi() { return view('pages.tentang.visi-misi'); }
    public function sejarah() { return view('pages.tentang.sejarah'); }
    public function akreditasi() { return view('pages.tentang.akreditasi'); }
    public function akademik() { return view('pages.akademik'); }
    public function kesiswaan() { return view('pages.kesiswaan'); }
}
