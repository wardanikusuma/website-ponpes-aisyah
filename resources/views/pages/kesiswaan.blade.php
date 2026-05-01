@extends('layouts.app')

@section('title', 'Kesiswaan')

@section('content')
    {{-- HERO SECTION: LAYERED DEPTH --}}
    <section class="relative py-40 md:py-60 px-4 overflow-hidden bg-slate-950">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/bangunan.jpeg') }}" class="w-full h-full object-cover object-center scale-105"
                alt="Kegiatan Kesiswaan">
            {{-- Overlay Gradasi yang lebih modern --}}
            <div class="absolute inset-0 bg-gradient-to-tr from-purple-900 via-purple-900/40 to-transparent"></div>
            <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-[2px]"></div>
        </div>

        <div class="max-w-7xl mx-auto text-center relative z-20">
            <span
                class="inline-block px-6 py-2 mb-8 text-[10px] font-black tracking-[0.4em] text-fuchsia-300 uppercase bg-white/5 backdrop-blur-md rounded-full border border-white/10 shadow-2xl">
                Layanan Kesiswaan
            </span>
            <h1
                class="text-6xl md:text-9xl font-black text-white leading-tight mb-8 tracking-tighter drop-shadow-2xl uppercase italic">
                Life at <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-400 via-purple-200 to-indigo-300">PONDOK</span>
            </h1>
            <p class="mt-6 text-xl md:text-2xl text-purple-100/80 max-w-4xl mx-auto font-light leading-relaxed">
                Membentuk karakter melalui <span class="font-bold text-fuchsia-400">kreativitas</span> dan
                eksplorasi <span class="font-bold text-indigo-300">prestasi</span>.
            </p>
        </div>
    </section>

    {{-- SECTION: PRESTASI (MODERN NEUMORPHIC CARDS) --}}
    <section id="prestasi" class="py-32 bg-slate-50 scroll-mt-24">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-6 mb-20">
                <div class="flex items-center gap-3">
                    <div class="w-2 h-10 bg-gradient-to-b from-purple-600 to-fuchsia-500 rounded-full"></div>
                    <h3 class="text-3xl font-black text-slate-900 uppercase tracking-tighter">Prestasi Unggulan</h3>
                </div>
                <div class="h-[1px] flex-1 bg-slate-200"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                @foreach ([['title' => 'Juara MHQ Nasional', 'year' => '2025', 'icon' => '🏆', 'color' => 'from-amber-400 to-orange-500'], ['title' => 'Medali KSN Matematika', 'year' => '2024', 'icon' => '🥈', 'color' => 'from-slate-300 to-slate-500']] as $p)
                    <div
                        class="group relative bg-white rounded-[3rem] shadow-[0_20px_50px_rgba(0,0,0,0.05)] transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_40px_80px_rgba(124,58,237,0.1)] border border-slate-100 overflow-hidden">
                        <div class="p-12 h-full flex flex-col items-center relative z-10">
                            <div
                                class="w-24 h-24 bg-gradient-to-br {{ $p['color'] }} rounded-[2rem] flex items-center justify-center text-5xl shadow-2xl mb-8 transform group-hover:rotate-6 transition-transform duration-500">
                                {{ $p['icon'] }}
                            </div>
                            <span
                                class="text-fuchsia-600 font-black tracking-[0.2em] text-xs mb-3 uppercase">{{ $p['year'] }}</span>
                            <h4
                                class="text-3xl font-black text-slate-800 uppercase tracking-tighter text-center leading-tight">
                                {{ $p['title'] }}</h4>
                            <p class="mt-4 text-slate-500 text-center text-sm font-medium">Membanganggakan umat melalui
                                dedikasi dan hafalan yang mutqin.</p>
                        </div>
                        {{-- Decorative Element --}}
                        <div
                            class="absolute -bottom-10 -right-10 w-40 h-40 bg-slate-50 rounded-full group-hover:bg-purple-50 transition-colors duration-500">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION: EKSTRAKURIKULER (SOFT GLASS TILES) --}}
    <section id="ekstrakurikuler" class="py-32 bg-white scroll-mt-24">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-24">
                <h3 class="text-4xl font-black text-slate-900 uppercase tracking-tighter">Minat & Bakat</h3>
                <div class="w-20 h-1.5 bg-gradient-to-r from-purple-600 to-fuchsia-500 mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @php
                    $ekskuls = [
                        ['n' => 'Tahfidz Plus', 'i' => '📖'],
                        ['n' => 'Coding Lab', 'i' => '💻'],
                        ['n' => 'Panahan', 'i' => '🏹'],
                        ['n' => 'Bahasa Arab', 'i' => '🌍'],
                        ['n' => 'Kaligrafi', 'i' => '✒️'],
                        ['n' => 'Sains Club', 'i' => '🧪'],
                        ['n' => 'Jurnalistik', 'i' => '📸'],
                        ['n' => 'Bela Diri', 'i' => '🥋'],
                    ];
                @endphp
                @foreach ($ekskuls as $e)
                    <div
                        class="p-8 rounded-[2rem] bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-xl hover:border-purple-200 transition-all duration-300 text-center group cursor-default">
                        <div
                            class="text-4xl mb-6 grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-500">
                            {{ $e['i'] }}
                        </div>
                        <h4
                            class="font-bold text-slate-700 uppercase text-[11px] tracking-widest group-hover:text-purple-700 transition-colors">
                            {{ $e['n'] }}</h4>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION: BERITA (DARK MODE CONTRAST) --}}
    <section id="berita" class="py-32 bg-slate-950 scroll-mt-24 overflow-hidden relative">
        <div
            class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_30%_20%,_rgba(124,58,237,0.1),_transparent_50%)]">
        </div>

        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="flex justify-between items-end mb-20 border-b border-white/10 pb-8">
                <h3 class="text-4xl font-black text-white uppercase tracking-tighter">Warta Pondok</h3>
                <a href="#"
                    class="text-fuchsia-400 font-bold text-sm tracking-widest hover:text-white transition uppercase">Lihat
                    Semua →</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                @for ($i = 0; $i < 2; $i++)
                    <div class="group cursor-pointer">
                        <div
                            class="aspect-video rounded-[2.5rem] overflow-hidden mb-8 shadow-2xl relative border border-white/5">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=800"
                                class="w-full h-full object-cover transition duration-700 group-hover:scale-105 brightness-90 group-hover:brightness-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-transparent">
                            </div>
                            <div class="absolute bottom-6 left-6">
                                <span
                                    class="bg-white/10 backdrop-blur-md text-white border border-white/20 px-4 py-1.5 rounded-full text-[10px] font-black uppercase tracking-widest">Update</span>
                            </div>
                        </div>
                        <h4
                            class="text-2xl font-black text-white uppercase group-hover:text-fuchsia-400 transition-colors duration-300 leading-tight">
                            Workshop Literasi Digital bagi Santriwati Era Gen-Z</h4>
                        <p class="text-slate-400 mt-4 leading-relaxed font-light italic">"Membekali muslimah dengan adab dan
                            kecerdasan dalam menggunakan teknologi."</p>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    {{-- SECTION: PPDB (VIBRANT GRADIENT BOX) --}}
    <section id="ppdb" class="py-32 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div
                class="relative rounded-[3.5rem] p-16 md:p-24 overflow-hidden shadow-[0_40px_100px_-20px_rgba(124,58,237,0.3)]">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-700 via-purple-800 to-fuchsia-600"></div>

                <div class="relative z-10 text-center text-white">
                    <h2 class="text-4xl md:text-7xl font-black mb-8 tracking-tighter uppercase">Mulai Langkahmu</h2>
                    <p class="text-purple-100 italic mb-12 text-lg md:text-2xl opacity-90 font-light max-w-2xl mx-auto">
                        "Bergabung bersama kami mencetak generasi muslimah yang kokoh dalam iman dan unggul dalam prestasi."
                    </p>
                    <a href="#"
                        class="inline-block bg-white text-purple-900 px-14 py-5 rounded-2xl font-black hover:scale-105 active:scale-95 transition-all uppercase tracking-[0.2em] text-sm shadow-xl">
                        Daftar PPDB 2026
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
