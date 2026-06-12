@extends('layouts.app')

@section('title', 'Akademik')

@section('content')
    {{-- 1. HERO SECTION --}}
    <section class="relative min-h-screen flex items-center pt-20 bg-purple-900">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/bangunan.jpeg') }}" class="w-full h-full object-cover object-center brightness-50"
                alt="Kegiatan Akademik">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-900/60 to-transparent"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-20 w-full">
            <div class="max-w-4xl mx-auto text-center">
                <span
                    class="inline-block px-4 py-1.5 mb-6 text-xs font-black tracking-[0.2em] text-fuchsia-300 uppercase bg-fuchsia-500/10 backdrop-blur-md rounded-full border border-fuchsia-500/20">
                    Pendidikan Berkualitas
                </span>

                <h1 class="text-5xl md:text-8xl font-black text-white leading-tight mb-6 tracking-tighter drop-shadow-2xl">
                    LAYANAN <br>
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-300 via-purple-100 to-indigo-200 uppercase">
                        Akademik
                    </span>
                </h1>

                <p class="text-lg md:text-2xl text-purple-100 font-medium leading-relaxed drop-shadow-md mb-4">
                    Kurikulum terpadu yang dirancang untuk melahirkan generasi muslimah yang cerdas secara intelektual dan
                    kokoh secara spiritual.
                </p>
            </div>
        </div>
    </section>

    {{-- 2. SECTION: JENJANG PENDIDIKAN (Tema Terang) --}}
    <section id="jenjang" class="py-24 md:py-32 bg-slate-50 scroll-mt-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 md:mb-20">
                <h2 class="text-fuchsia-600 font-black text-xs md:text-sm uppercase tracking-[0.3em] mb-4">Pilihan Tingkatan</h2>
                <h3 class="text-3xl md:text-5xl font-black text-slate-900">Jenjang Pendidikan</h3>
            </div>

            {{-- Menggunakan Flex Wrap agar sisa 2 kotak di bawah posisinya tepat di tengah --}}
            <div class="flex flex-wrap justify-center gap-6 md:gap-8 max-w-6xl mx-auto">
                @php
                    $jenjangs = [
                        ['title' => 'PAUD', 'desc' => 'Pendidikan Anak Usia Dini', 'color' => 'text-rose-500', 'bg' => 'bg-rose-100', 'hover' => 'group-hover:bg-rose-500'],
                        ['title' => 'TK', 'desc' => 'Taman Kanak-Kanak', 'color' => 'text-amber-500', 'bg' => 'bg-amber-100', 'hover' => 'group-hover:bg-amber-500'],
                        ['title' => 'SD', 'desc' => 'Sekolah Dasar', 'color' => 'text-emerald-500', 'bg' => 'bg-emerald-100', 'hover' => 'group-hover:bg-emerald-500'],
                        ['title' => 'SMP', 'desc' => 'Sekolah Menengah Pertama', 'color' => 'text-sky-500', 'bg' => 'bg-sky-100', 'hover' => 'group-hover:bg-sky-500'],
                        ['title' => 'SMA', 'desc' => 'Sekolah Menengah Atas', 'color' => 'text-indigo-500', 'bg' => 'bg-indigo-100', 'hover' => 'group-hover:bg-indigo-500'],
                    ];
                @endphp
                @foreach ($jenjangs as $j)
                    <div class="w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1.5rem)] group relative p-8 rounded-[2rem] bg-white shadow-sm hover:shadow-2xl border border-slate-100 hover:border-transparent transition-all duration-500 hover:-translate-y-2 overflow-hidden text-center flex flex-col items-center">
                        {{-- Icon Box --}}
                        <div class="mb-6 w-20 h-20 rounded-[1.5rem] {{ $j['bg'] }} flex items-center justify-center {{ $j['color'] }} font-black text-2xl group-hover:text-white {{ $j['hover'] }} transition-colors duration-500 shadow-sm group-hover:scale-110">
                            {{ $j['title'] }}
                        </div>
                        <h4 class="text-2xl font-black text-slate-900 mb-3 group-hover:{{ $j['color'] }} transition-colors duration-300">
                            {{ $j['title'] }}
                        </h4>
                        <p class="text-slate-500 font-medium leading-relaxed">
                            {{ $j['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 3. SECTION: KURIKULUM (Tema Terang dengan Aksen Warna) --}}
    <section id="kurikulum" class="py-24 md:py-32 bg-white relative overflow-hidden scroll-mt-20">
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 32px 32px;"></div>
        
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-16 md:mb-20">
                <h2 class="text-indigo-600 font-black text-xs md:text-sm uppercase tracking-[0.3em] mb-4">Sistem Pendidikan</h2>
                <h3 class="text-3xl md:text-5xl font-black text-slate-900">Kurikulum Terpadu</h3>
            </div>
            
            <div class="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-12 lg:gap-16">
                {{-- Card Kiri (White) --}}
                <div class="w-full md:w-1/2 max-w-md bg-white rounded-[2.5rem] p-10 shadow-[0_20px_50px_-12px_rgba(0,0,0,0.1)] border border-slate-100 relative z-10 hover:z-30 transition-transform duration-500 hover:scale-105">
                    <div class="w-16 h-16 rounded-full bg-indigo-50 flex items-center justify-center text-3xl mb-6 text-indigo-600 shadow-inner">📚</div>
                    <h4 class="text-2xl font-black text-slate-900 uppercase tracking-tight mb-3">Kurikulum <br> Nasional</h4>
                    <p class="text-sm text-indigo-500 font-bold uppercase tracking-widest mb-4">Kemendikbudristek</p>
                    <p class="text-slate-600 leading-relaxed">Penerapan kurikulum standar nasional yang memastikan siswi unggul dalam sains, teknologi, dan pengetahuan umum.</p>
                </div>

                {{-- Card Kanan (Gradient Purple) - Menggantikan warna hitam/slate --}}
                <div class="w-full md:w-1/2 max-w-md bg-gradient-to-br from-purple-700 to-indigo-800 rounded-[2.5rem] p-10 shadow-[0_20px_50px_-12px_rgba(79,70,229,0.3)] border border-purple-600 relative z-20 hover:z-30 transition-transform duration-500 hover:scale-105">
                    <div class="w-16 h-16 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center text-3xl mb-6 text-white shadow-inner">🌙</div>
                    <h4 class="text-2xl font-black text-white uppercase tracking-tight mb-3">Kurikulum <br> Pesantren</h4>
                    <p class="text-sm text-fuchsia-300 font-bold uppercase tracking-widest mb-4">Kajian Kitab & Adab</p>
                    <p class="text-purple-100 leading-relaxed">Penggemblengan spiritual, adab, dan pendalaman ilmu agama melalui kurikulum khas pesantren modern.</p>
                </div>
            </div>
        </div>
    </section>

{{-- 4. SECTION: PROGRAM UNGGULAN --}}
    <section id="unggulan" class="py-24 md:py-32 bg-white scroll-mt-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 md:mb-20">
                <h3 class="text-3xl md:text-5xl font-black text-slate-900 uppercase">Program <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-600 to-purple-600">Unggulan</span></h3>
                <div class="w-24 h-1.5 bg-gradient-to-r from-purple-600 to-fuchsia-500 mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $programs = [
                        ['title' => "Tahfidz Qur'an", 'icon' => '📖', 'color' => 'text-purple-600', 'bg' => 'bg-purple-100', 'desc' => 'Program hafalan bersanad dengan metode mutqin.'],
                        ['title' => 'Bilingual System', 'icon' => '🗣️', 'color' => 'text-fuchsia-600', 'bg' => 'bg-fuchsia-100', 'desc' => 'Kewajiban berbahasa Arab dan Inggris dalam asrama.'],
                        ['title' => 'Kajian Kitab Kuning', 'icon' => '📜', 'color' => 'text-indigo-600', 'bg' => 'bg-indigo-100', 'desc' => 'Pemahaman mendalam literatur klasik Islam.'],
                        ['title' => 'Entrepreneurship', 'icon' => '🛍️', 'color' => 'text-pink-600', 'bg' => 'bg-pink-100', 'desc' => 'Mencetak kemandirian ekonomi muslimah.'],
                        ['title' => 'Literasi Digital & IT', 'icon' => '💻', 'color' => 'text-blue-600', 'bg' => 'bg-blue-100', 'desc' => 'Penguasaan teknologi tepat guna masa kini.'],
                        ['title' => 'Leadership Program', 'icon' => '👑', 'color' => 'text-amber-600', 'bg' => 'bg-amber-100', 'desc' => 'Pelatihan kepemimpinan dan keorganisasian.'],
                    ];
                @endphp
                @foreach ($programs as $prog)
                    <div class="bg-white rounded-[2rem] p-8 border border-slate-100 shadow-md hover:shadow-[0_15px_40px_-15px_rgba(147,51,234,0.15)] hover:-translate-y-1 transition-all duration-300 group">
                        <div class="w-14 h-14 rounded-2xl {{ $prog['bg'] }} {{ $prog['color'] }} flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                            {{ $prog['icon'] }}
                        </div>
                        <h4 class="text-xl font-black text-slate-900 mb-3">{{ $prog['title'] }}</h4>
                        <p class="text-slate-500 leading-relaxed">{{ $prog['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 5. SECTION: PPDB (Vibrant Gradient CTA) --}}
    {{-- SECTION: PPDB BANNER --}}
    <section id="ppdb" class="py-24 px-4">
        <div
            class="max-w-6xl mx-auto bg-gradient-to-br from-indigo-900 via-purple-800 to-fuchsia-700 rounded-[3.5rem] p-12 md:p-24 text-center text-white shadow-[0_35px_60px_-15px_rgba(124,58,237,0.5)] relative overflow-hidden">
            <div
                class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10">
            </div>
            <div class="relative z-10">
                <h2 class="text-5xl md:text-7xl font-black mb-8 tracking-tighter">Gabung Bersama Kami</h2>
                <p
                    class="text-purple-100 mb-12 text-lg md:text-2xl max-w-2xl mx-auto font-medium opacity-90 leading-relaxed">
                    Jadilah bagian dari keluarga besar Aisyah Samawa. Pendaftaran TA 2026/2027 telah dibuka secara resmi.
                </p>
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="{{ route('ppdb.landing') }}"
                        class="bg-white text-purple-900 px-14 py-6 rounded-2xl font-black shadow-2xl hover:scale-105 active:scale-95 transition-all text-xl uppercase tracking-widest">
                        DAFTAR PPDB ONLINE
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection