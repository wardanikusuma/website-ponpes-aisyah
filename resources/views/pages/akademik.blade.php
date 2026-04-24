@extends('layouts.app')

@section('title', 'Akademik')

@section('content')
    {{-- HERO SECTION --}}
    <section class="relative py-40 md:py-52 px-4 overflow-hidden bg-indigo-950">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/akademik.jpeg') }}" class="w-full h-full object-cover object-center brightness-40" alt="Kegiatan Akademik">
            <div class="absolute inset-0 bg-gradient-to-b from-indigo-950/80 via-purple-900/50 to-fuchsia-900/90"></div>
        </div>
        <div class="max-w-7xl mx-auto text-center relative z-20">
            <span class="inline-block px-4 py-1.5 mb-6 text-xs font-black tracking-[0.25em] text-fuchsia-300 uppercase bg-fuchsia-500/10 backdrop-blur-md rounded-full border border-fuchsia-500/20">
                Pendidikan Berkualitas
            </span>
            <h1 class="text-5xl md:text-8xl font-black text-white leading-tight mb-8 tracking-tighter drop-shadow-2xl uppercase">
                Layanan <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-300 to-indigo-300">AKADEMIK</span>
            </h1>
        </div>
    </section>

    {{-- SECTION: JENJANG PENDIDIKAN (Grid 4 Kolom sesuai Wireframe) --}}
    <section id="jenjang" class="py-28 bg-white scroll-mt-24">
        <div class="max-w-5xl mx-auto px-4"> {{-- max-w-5xl agar tidak terlalu lebar kesamping --}}
            <div class="text-center mb-16">
                <h2 class="text-fuchsia-600 font-black text-xs uppercase tracking-[0.3em] mb-4">Pilihan Tingkatan</h2>
                <h3 class="text-4xl font-black text-gray-900">Jenjang Pendidikan</h3>
            </div>
            
            {{-- Menggunakan grid-cols-2 agar selalu 2 kolom (2 atas, 2 bawah) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @php
                    $jenjangs = [
                        ['title' => 'MTs', 'desc' => 'Madrasah Tsanawiyah', 'color' => 'bg-purple-600'],
                        ['title' => 'MA', 'desc' => 'Madrasah Aliyah', 'color' => 'bg-fuchsia-600'],
                        ['title' => 'Tahfidz', 'desc' => 'Program Unggulan Hafalan', 'color' => 'bg-indigo-600'],
                        ['title' => 'Diniyah', 'desc' => 'Pendalaman Kitab Kuning', 'color' => 'bg-slate-900'],
                    ];
                @endphp
                @foreach($jenjangs as $j)
                <div class="aspect-video md:aspect-[4/3] rounded-[2.5rem] p-10 flex flex-col justify-center items-center text-center relative overflow-hidden group border border-slate-100 shadow-sm hover:shadow-xl transition-all bg-white">
                    <div class="absolute top-0 left-0 w-full h-2 {{ $j['color'] }}"></div>
                    
                    <div class="mb-6 w-16 h-16 rounded-2xl {{ $j['color'] }} flex items-center justify-center text-white font-black text-2xl group-hover:rotate-12 transition-transform shadow-lg">
                        {{ $j['title'] }}
                    </div>
                    
                    <h4 class="text-2xl font-black text-gray-900 mb-3">{{ $j['title'] }}</h4>
                    <p class="text-gray-500 font-medium leading-relaxed max-w-xs">{{ $j['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION: KURIKULUM (Desain Lingkaran sesuai Wireframe) --}}
    <section id="kurikulum" class="py-28 bg-slate-50 border-y border-slate-200 scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-fuchsia-600 font-black text-xs uppercase tracking-[0.3em] mb-4">Sistem Pendidikan</h2>
                <h3 class="text-4xl font-black text-gray-900">Kurikulum Terpadu</h3>
            </div>
            <div class="flex flex-wrap justify-center gap-12 md:gap-24">
                <div class="group cursor-default">
                    <div class="w-64 h-64 md:w-80 md:h-80 bg-white border-4 border-purple-500 rounded-full flex flex-col items-center justify-center text-center p-10 shadow-xl group-hover:scale-105 transition-transform">
                        <div class="text-4xl mb-4">📚</div>
                        <h4 class="font-black text-gray-900 uppercase tracking-tighter mb-2">Kurikulum <br> Nasional</h4>
                        <p class="text-xs text-gray-500 font-bold uppercase tracking-widest">Kemendikbudristek</p>
                    </div>
                </div>
                <div class="group cursor-default">
                    <div class="w-64 h-64 md:w-80 md:h-80 bg-slate-900 border-4 border-fuchsia-500 rounded-full flex flex-col items-center justify-center text-center p-10 shadow-xl group-hover:scale-105 transition-transform">
                        <div class="text-4xl mb-4">🌙</div>
                        <h4 class="font-black text-white uppercase tracking-tighter mb-2">Kurikulum <br> Pesantren</h4>
                        <p class="text-xs text-fuchsia-400 font-bold uppercase tracking-widest">Kajian Kitab & Adab</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION: PROGRAM UNGGULAN (Zig-zag Layout sesuai Wireframe) --}}
    <section id="unggulan" class="py-28 bg-white scroll-mt-24">
        <div class="max-w-5xl mx-auto px-4">
            <div class="text-center mb-20">
                <h2 class="text-purple-700 font-black tracking-[0.4em] text-sm mb-4 uppercase">Special Programs</h2>
                <h3 class="text-4xl font-black text-gray-900 uppercase">Program <span class="text-fuchsia-600">Unggulan</span></h3>
            </div>
            
            <div class="space-y-10">
                @php
                    $programs = [
                        ['title' => "Tahfidz Qur'an 30 Juz", 'icon' => '📖', 'color' => 'from-purple-500 to-purple-700'],
                        ['title' => "Bilingual (Arab & Inggris)", 'icon' => '🗣️', 'color' => 'from-fuchsia-500 to-fuchsia-700'],
                        ['title' => "Kajian Kitab Kuning", 'icon' => '📜', 'color' => 'from-indigo-500 to-indigo-700'],
                        ['title' => "Entrepreneurship Muslimah", 'icon' => '🛍️', 'color' => 'from-pink-500 to-pink-700'],
                        ['title' => "Literasi Digital & IT", 'icon' => '💻', 'color' => 'from-slate-800 to-slate-950'],
                    ];
                @endphp

                @foreach($programs as $index => $prog)
                <div class="flex items-center gap-6 md:gap-10 {{ $index % 2 != 0 ? 'flex-row-reverse' : '' }}">
                    {{-- Ikon Bulat --}}
                    <div class="w-24 h-24 md:w-32 md:h-32 bg-gradient-to-br {{ $prog['color'] }} rounded-full shrink-0 flex items-center justify-center text-4xl shadow-lg border-4 border-white">
                        {{ $prog['icon'] }}
                    </div>
                    {{-- Baris Deskripsi --}}
                    <div class="flex-1 h-20 md:h-24 bg-slate-50 border border-slate-100 rounded-[2rem] flex items-center px-8 shadow-sm group hover:bg-white hover:border-purple-200 transition-all">
                        <span class="font-black text-gray-800 uppercase tracking-tighter text-sm md:text-xl {{ $index % 2 != 0 ? 'ml-auto text-right' : '' }}">
                            {{ $prog['prog'] ?? $prog['title'] }}
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION: PPDB (Sesuai Wireframe: Satu Kotak di Bawah) --}}
    <section id="ppdb" class="py-24 bg-white scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4">
            <div class="bg-gradient-to-br from-indigo-950 to-slate-900 rounded-[3rem] p-12 md:p-20 text-center relative overflow-hidden shadow-2xl">
                {{-- Ornamen Latar --}}
                <div class="absolute top-0 right-0 w-64 h-64 bg-fuchsia-500/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                
                <h2 class="text-fuchsia-400 font-black tracking-[0.4em] text-xs mb-6 uppercase relative z-10">Daftar PPDB</h2>
                <p class="text-white text-lg md:text-xl font-medium italic mb-10 relative z-10">
                    "Mencetak generasi muslimah unggul yang cerdas dan berakhlak mulia."
                </p>
                
                {{-- Tombol Daftar --}}
                <a href="#" class="inline-block bg-white text-gray-900 px-12 py-5 rounded-2xl font-black shadow-xl hover:scale-105 transition-all uppercase tracking-[0.2em] text-sm relative z-10">
                    Klik Untuk Daftar
                </a>
            </div>
        </div>
    </section>
@endsection