<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function beranda() { return view('pages.beranda'); }
    public function tentang() { return view('pages.tentang'); }
    public function akademik() { return view('pages.akademik'); }
    public function kesiswaan() { return view('pages.kesiswaan'); }
}
