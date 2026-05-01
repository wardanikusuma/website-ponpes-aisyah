@extends('layouts.app')

@section('title', 'Kesiswaan')

@section('content')
    {{-- HERO SECTION: IDENTIK DENGAN AKADEMIK --}}
    <section class="relative py-32 md:py-48 px-4 overflow-hidden bg-purple-900">
        <div class="absolute inset-0 z-0">
            {{-- Foto Background --}}
            <img src="{{ asset('assets/img/bangunan.jpeg') }}" class="w-full h-full object-cover object-center brightness-50"
                alt="Kegiatan Kesiswaan">
            {{-- Overlay Ungu Gradient --}}
            <div class="absolute inset-0 bg-gradient-to-b from-purple-900/80 via-purple-800/40 to-indigo-900/90"></div>
        </div>

        <div class="max-w-7xl mx-auto text-center relative z-20">
            <span
                class="inline-block px-4 py-1.5 mb-6 text-xs font-black tracking-[0.2em] text-fuchsia-300 uppercase bg-fuchsia-500/10 backdrop-blur-md rounded-full border border-fuchsia-500/20">
                Aktivitas & Kreativitas
            </span>
            <h1
                class="text-5xl md:text-8xl font-black text-white leading-tight mb-8 tracking-tighter drop-shadow-2xl uppercase">
                Layanan <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-300 to-indigo-300">KESISWAAN</span>
            </h1>
            <p
                class="mt-6 text-lg md:text-2xl text-purple-100 max-w-3xl mx-auto font-medium leading-relaxed drop-shadow-md">
                Wadah eksplorasi bakat, pengasahan minat, dan ukiran prestasi untuk membentuk santriwati yang aktif,
                kreatif, dan berprestasi.
            </p>
        </div>
    </section>

    {{-- SECTION: PRESTASI --}}
    <section id="prestasi" class="py-28 bg-white scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-fuchsia-600 font-black text-xs uppercase tracking-[0.3em] mb-4">Ukir Sejarah</h2>
                <h3 class="text-4xl font-black text-gray-900">Prestasi Santriwati</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @php
                    $prestasi = [
                        [
                            'title' => 'Juara 1 MHQ Nasional',
                            'year' => '2025',
                            'icon' => '🏆',
                            'color' => 'bg-purple-600',
                        ],
                        ['title' => 'Medali Perak KSN', 'year' => '2024', 'icon' => '🥈', 'color' => 'bg-fuchsia-600'],
                        ['title' => 'Santri Teladan', 'year' => '2025', 'icon' => '⭐', 'color' => 'bg-indigo-600'],
                    ];
                @endphp
                @foreach ($prestasi as $p)
                    <div
                        class="rounded-[2.5rem] p-10 flex flex-col justify-center items-center text-center relative overflow-hidden group border border-slate-100 shadow-sm hover:shadow-xl transition-all bg-white transform hover:-translate-y-2">
                        <div class="absolute top-0 left-0 w-full h-2 {{ $p['color'] }}"></div>
                        <div
                            class="mb-6 w-20 h-20 rounded-2xl {{ $p['color'] }} flex items-center justify-center text-white font-black text-4xl shadow-lg">
                            {{ $p['icon'] }}
                        </div>
                        <span
                            class="text-xs font-black text-fuchsia-600 tracking-widest uppercase mb-2">{{ $p['year'] }}</span>
                        <h4 class="text-2xl font-black text-gray-900 mb-3">{{ $p['title'] }}</h4>
                        <p class="text-gray-500 font-medium leading-relaxed">Berhasil mengharumkan nama pondok dalam ajang
                            kompetisi tingkat Nasional & Provinsi.</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION: EKSTRAKURIKULER --}}
    <section id="ekstrakurikuler" class="py-28 bg-slate-50 border-y border-slate-200 scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-fuchsia-600 font-black text-xs uppercase tracking-[0.3em] mb-4">Minat & Bakat</h2>
                <h3 class="text-4xl font-black text-gray-900 uppercase">Ekstra<span class="text-purple-700">kurikuler</span>
                </h3>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @php
                    $ekskuls = [
                        ['name' => 'Tahfidz Plus', 'icon' => '📖'],
                        ['name' => 'Coding Lab', 'icon' => '💻'],
                        ['name' => 'Panahan', 'icon' => '🏹'],
                        ['name' => 'Bahasa Arab', 'icon' => '🌍'],
                        ['name' => 'Kaligrafi', 'icon' => '✒️'],
                        ['name' => 'Sains Club', 'icon' => '🧪'],
                        ['name' => 'Jurnalistik', 'icon' => '📸'],
                        ['name' => 'Bela Diri', 'icon' => '🥋'],
                    ];
                @endphp
                @foreach ($ekskuls as $e)
                    <div
                        class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-md border border-slate-100 text-center transition-all group hover:bg-purple-600">
                        <div class="text-3xl mb-4 group-hover:scale-125 transition-transform">{{ $e['icon'] }}</div>
                        <h4 class="font-black text-gray-800 group-hover:text-white uppercase tracking-tight text-xs">
                            {{ $e['name'] }}</h4>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION: BERITA & KEGIATAN --}}
    <section id="berita" class="py-28 bg-white scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-20">
                <h2 class="text-purple-700 font-black tracking-[0.4em] text-sm mb-4 uppercase">Latest News</h2>
                <h3 class="text-4xl font-black text-gray-900 uppercase">Berita & <span
                        class="text-fuchsia-600">Kegiatan</span></h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                {{-- Headline Berita --}}
                <div class="group cursor-pointer">
                    <div class="overflow-hidden rounded-[2.5rem] mb-6 shadow-2xl aspect-video relative">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=800"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div
                            class="absolute top-6 left-6 bg-purple-600 text-white px-4 py-1 rounded-full text-xs font-black uppercase tracking-widest shadow-lg">
                            Headline</div>
                    </div>
                    <span class="text-purple-600 font-bold text-sm uppercase tracking-widest">17 April 2026</span>
                    <h3 class="text-3xl font-black text-gray-900 mt-2 leading-tight group-hover:text-purple-600 transition">
                        Rihlah Edukasi: Santriwati Kunjungi Perpustakaan Nasional</h3>
                    <p class="text-gray-500 mt-4 leading-relaxed font-medium">Kegiatan rutin tahunan untuk memperluas
                        wawasan dan kecintaan terhadap literasi bagi santriwati.</p>
                </div>

                {{-- List Berita Kecil --}}
                <div class="space-y-8">
                    @for ($i = 1; $i <= 3; $i++)
                        <div
                            class="flex gap-6 group cursor-pointer border-b border-gray-50 pb-8 hover:bg-slate-50 transition p-4 rounded-2xl">
                            <div class="w-32 h-32 flex-shrink-0 rounded-2xl overflow-hidden shadow-md">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=400"
                                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                            </div>
                            <div>
                                <span class="text-purple-400 font-bold text-xs uppercase">Berita Internal</span>
                                <h4
                                    class="text-lg font-black text-gray-900 group-hover:text-purple-600 transition leading-snug mt-1">
                                    Persiapan Ujian Akhir Semester Ganjil TA 2026/2027</h4>
                                <p class="text-xs text-gray-400 mt-2">Update kegiatan mingguan pondok...</p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION: PPDB FOOTER SECTION --}}
    <section id="ppdb" class="py-24 bg-white scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4">
            <div
                class="bg-gradient-to-br from-indigo-950 to-slate-900 rounded-[3rem] p-12 md:p-20 text-center relative overflow-hidden shadow-2xl">
                <div class="absolute top-0 right-0 w-64 h-64 bg-fuchsia-500/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                <h2 class="text-fuchsia-400 font-black tracking-[0.4em] text-xs mb-6 uppercase relative z-10">Daftar
                    Sekarang</h2>
                <p class="text-white text-lg md:text-xl font-medium italic mb-10 relative z-10">
                    "Membangun generasi muslimah yang kokoh dalam iman dan unggul dalam prestasi."
                </p>
                <a href="#"
                    class="inline-block bg-white text-gray-900 px-12 py-5 rounded-2xl font-black shadow-xl hover:scale-105 transition-all uppercase tracking-[0.2em] text-sm relative z-10">
                    Info Pendaftaran
                </a>
            </div>
        </div>
    </section>
@endsection
