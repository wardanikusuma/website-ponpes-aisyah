<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

{{-- Tautan CSS Swiper untuk mengatur pergeseran gambar agar rapi --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    {{-- HERO SECTION (overflow-hidden dihapus agar kotak statistik yang menjorok ke bawah tidak terpotong/hilang) --}}
    <section class="relative min-h-[690px] md:min-h-[640px] flex flex-col justify-between bg-[#13072c]">

        {{-- WADAH UTAMA SLIDER BERGESER (SWIPER CAROUSEL) --}}
        <div class="swiper hero-swiper absolute inset-0 z-0 w-full h-full overflow-hidden">
            <div class="swiper-wrapper">

                <div class="swiper-slide w-full h-full">
                    <img src="{{ asset('assets/img/bangunan.jpeg') }}"
                        class="w-full h-full object-cover object-center brightness-[0.72]" alt="Gedung Aisyah Samawa">
                </div>

                <div class="swiper-slide w-full h-full">
                    <img src="{{ asset('assets/img/kegiatan.jpeg') }}"
                        class="w-full h-full object-cover object-center brightness-[0.72]" alt="Kegiatan Aisyah Samawa">
                </div>

                <div class="swiper-slide w-full h-full">
                    <img src="{{ asset('assets/img/bg4.jpg') }}"
                        class="w-full h-full object-cover object-center brightness-[0.72]" alt="Fasilitas Aisyah Samawa">
                </div>

                <div class="swiper-slide w-full h-full">
                    <img src="{{ asset('assets/img/bg2.jpeg') }}"
                        class="w-full h-full object-cover object-center brightness-[0.72]" alt="Lingkungan Aisyah Samawa">
                </div>

            </div>

            {{-- Lapisan gradien konstan di atas foto agar teks putih selalu tajam dibaca --}}
            <div
                class="absolute inset-0 bg-gradient-to-r from-[rgba(15,8,38,0.92)] via-[rgba(25,15,50,0.55)] to-[rgba(25,15,50,0.12)] z-10 pointer-events-none">
            </div>
        </div>

        {{-- KONTEN UTAMA HERO --}}
        
        <br>
        <div class="max-w-7xl mx-auto px-6 relative z-20 w-full flex-1 flex items-center py-12 md:py-10 md:pb-24">
            <div class="max-w-3xl text-left">

<<<<<<< HEAD

                <h1 class="text-4xl md:text-7xl font-black  text-white leading-tight mb-6 tracking-tighter drop-shadow-2xl">
=======
                <h1 class="text-4xl md:text-[60px] font-black text-white leading-[1.06] mb-4 tracking-[-0.04em] drop-shadow-2xl">
>>>>>>> 7f39c2969cee77f31d7056328311f3b08885c2f7
                    Membentuk Generasi yang <br>
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-[#f08cff] via-[#d89cff] to-[#c3a5ff] uppercase">
                        Berilmu dan Berakhlak
                    </span>
                </h1>

                <p class="text-sm md:text-base text-white/90 font-medium leading-relaxed drop-shadow-md mb-2 max-w-xl">
                    Selamat datang di sumber informasi Pondok Pesantren Aisyah Samawa.
                </p>

                <p class="italic text-[#f0a2ff] text-lg md:text-xl font-bold mb-5 drop-shadow-lg">
                    "Spirituality, Intellectuality, and Morality"
                </p>

                {{-- Keunggulan utama seperti pada referensi --}}
                <br>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3.5 max-w-3xl mt-8 mb-6">
                    <div class="flex items-center gap-3 min-h-[80px] px-4 py-3 rounded-2xl border border-white/45 bg-white/[0.06] backdrop-blur-sm text-white">
                        <svg class="w-8 h-8 md:w-9 md:h-9 shrink-0 text-fuchsia-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 5.5A2.5 2.5 0 016.5 3H11v16H6.5A2.5 2.5 0 004 21.5v-16zM20 5.5A2.5 2.5 0 0017.5 3H13v16h4.5a2.5 2.5 0 012.5 2.5v-16z" />
                        </svg>
                        <span class="text-xs md:text-[13px] font-bold leading-tight">Kurikulum<br>Modern</span>
                    </div>
                    <div class="flex items-center gap-3 min-h-[64px] px-4 py-3 rounded-2xl border border-white/45 bg-white/[0.06] backdrop-blur-sm text-white">
                        <svg class="w-8 h-8 md:w-9 md:h-9 shrink-0 text-fuchsia-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 20h18M5 20v-8h14v8M7 12V8l5-4 5 4v4M9 16h.01M12 16h.01M15 16h.01" />
                        </svg>
                        <span class="text-xs md:text-[13px] font-bold leading-tight">Boarding<br>School</span>
                    </div>
                    <div class="flex items-center gap-3 min-h-[64px] px-4 py-3 rounded-2xl border border-white/45 bg-white/[0.06] backdrop-blur-sm text-white">
                        <svg class="w-8 h-8 md:w-9 md:h-9 shrink-0 text-fuchsia-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 15.5a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM8.5 14.5L7 21l5-2 5 2-1.5-6.5" />
                        </svg>
                        <span class="text-xs md:text-[13px] font-bold leading-tight">Akreditasi A</span>
                    </div>
                    <div class="flex items-center gap-3 min-h-[64px] px-4 py-3 rounded-2xl border border-white/45 bg-white/[0.06] backdrop-blur-sm text-white">
                        <svg class="w-8 h-8 md:w-9 md:h-9 shrink-0 text-fuchsia-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="12" cy="12" r="9" stroke-width="1.8" />
                            <path stroke-linecap="round" stroke-width="1.8" d="M3.5 12h17M12 3c2.2 2.4 3.3 5.4 3.3 9S14.2 18.6 12 21M12 3C9.8 5.4 8.7 8.4 8.7 12S9.8 18.6 12 21" />
                        </svg>
                        <span class="text-xs md:text-[13px] font-bold leading-tight">Bahasa Arab &<br>Inggris</span>
                    </div>
                </div>

                <br>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('ppdb.landing') }}"
                        class="inline-flex items-center justify-center min-w-[190px] bg-gradient-to-r from-violet-600 to-fuchsia-600 text-white border border-fuchsia-400/40 px-8 py-4 rounded-2xl font-black hover:from-violet-500 hover:to-fuchsia-500 hover:-translate-y-0.5 transition-all shadow-lg shadow-fuchsia-950/30 text-sm">
                        DAFTAR PPDB  <span class="text-lg leading-none"></span>
                    </a>
                    <a href="{{ route('tentang') }}"
                        class="inline-flex items-center justify-center min-w-[210px] bg-white/[0.06] backdrop-blur-md border border-white/70 text-white px-8 py-4 rounded-2xl font-black hover:bg-white hover:text-purple-900 hover:-translate-y-0.5 transition-all text-sm">
                        PROFIL SEKOLAH  <span class="text-lg leading-none"></span>
                    </a>
                </div>
            </div>
        </div>

        {{-- KOTAK STATISTIK MELAYANG SETENGAH DI ATAS HERO, SETENGAH DI ATAS PUTIH (z-30 memastikan dia di paling depan) --}}
        <div class="relative z-30 w-full max-w-5xl mx-auto px-4 md:px-6 -mb-24 md:-mb-20">
            <div
                class="w-full bg-gradient-to-r from-[#321067]/95 via-[#4a127d]/95 to-[#28105e]/95 backdrop-blur-md rounded-[1.75rem] py-7 md:py-8 px-5 grid grid-cols-2 md:grid-cols-4 gap-y-7 shadow-[0_25px_50px_-12px_rgba(43,10,86,0.6)] border border-fuchsia-500/20">

                <div class="text-center md:border-r border-purple-300/20 px-2">
                    <div class="flex items-center justify-center gap-3">
                        <svg class="w-8 h-8 text-fuchsia-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8zM22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" /></svg>
                        <p class="text-3xl md:text-4xl font-black text-white leading-none tracking-tight"><span class="count-number" data-target="500">0</span>+</p>
                    </div>
                    <p class="text-white font-bold uppercase text-[9px] tracking-[0.18em] mt-3">Total Santriwati</p>
                    <p class="text-purple-200/70 text-[9px] mt-1">Santriwati aktif dan berprestasi</p>
                </div>

                <div class="text-center md:border-r border-purple-300/20 px-2">
                    <div class="flex items-center justify-center gap-3">
                        <svg class="w-8 h-8 text-fuchsia-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l9-5 9 5-9 5-9-5zM7 10.5V15c2.8 2 7.2 2 10 0v-4.5M21 8v6" /></svg>
                        <p class="text-3xl md:text-4xl font-black text-white leading-none tracking-tight"><span class="count-number" data-target="50">0</span>+</p>
                    </div>
                    <p class="text-white font-bold uppercase text-[9px] tracking-[0.18em] mt-3">Guru & Pengajar</p>
                    <p class="text-purple-200/70 text-[9px] mt-1">Guru profesional & berkompeten</p>
                </div>

                <div class="text-center md:border-r border-purple-300/20 px-2">
                    <div class="flex items-center justify-center gap-3">
                        <svg class="w-8 h-8 text-fuchsia-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2" stroke-width="1.8" /><path stroke-linecap="round" stroke-width="1.8" d="M16 3v4M8 3v4M3 10h18M12 13v5M9.5 15.5h5" /></svg>
                        <p class="text-3xl md:text-4xl font-black text-white leading-none tracking-tight"><span class="count-number" data-target="8">0</span>+</p>
                    </div>
                    <p class="text-white font-bold uppercase text-[9px] tracking-[0.18em] mt-3">Tahun Berdiri</p>
                    <p class="text-purple-200/70 text-[9px] mt-1">Pengalaman dalam pendidikan</p>
                </div>

                <div class="text-center px-2">
                    <div class="flex items-center justify-center gap-3">
                        <svg class="w-8 h-8 text-fuchsia-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 21h8M12 17v4M7 4h10v4a5 5 0 01-10 0V4zM7 6H4v2a4 4 0 004 4M17 6h3v2a4 4 0 01-4 4" /></svg>
                        <p class="text-3xl md:text-4xl font-black text-white leading-none tracking-tight"><span class="count-number" data-target="15">0</span>+</p>
                    </div>
                    <p class="text-white font-bold uppercase text-[9px] tracking-[0.18em] mt-3">Prestasi Unggulan</p>
                    <p class="text-purple-200/70 text-[9px] mt-1">Tingkat regional & nasional</p>
                </div>

            </div>
        </div>
    </section>

    {{-- SECTION: SAMBUTAN KEPALA SEKOLAH (Diberi z-10 dan pt-36 agar rapi di bawah kotak melayang) --}}
    <section class="relative z-10 pt-36 pb-32 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-20 items-center mt-10">
            <div class="order-2 md:order-1 relative">
                <div class="absolute -top-4 -left-4 w-20 h-20 bg-purple-100 rounded-full -z-10 opacity-50"></div>
                <h2 class="text-fuchsia-600 font-black text-xs uppercase tracking-[0.3em] mb-4">Sambutan Kepala Sekolah</h2>
                <h3 class="text-4xl font-black text-gray-900 mb-8 leading-tight">
                    {{ $yayasan->sambutan_kepala_yayasan ?? 'Membangun Karakter Berbasis Moralitas' }}</h3>

                <div class="space-y-6 text-gray-600 text-lg leading-relaxed font-medium">
                    <p class="border-l-4 border-fuchsia-500 pl-6 italic bg-fuchsia-50/50 py-4 rounded-r-xl text-gray-800">
                        "{{ $yayasan->quotes_kepala_yayasan ?? 'Pendidikan bukan sekadar transfer ilmu, tapi penanaman adab dan keberanian berpikir.' }}"
                    </p>
                    <p>{{ $yayasan->deskripsi_kepala_yayasan ?? 'Di Aisyah Samawa, kami memastikan setiap santriwati mendapatkan perhatian personal untuk mengembangkan potensi uniknya dalam lingkungan yang mendukung.' }}
                    </p>
                </div>

                <div class="mt-10 flex items-center gap-4">
                    <div class="w-16 h-1 bg-gradient-to-r from-fuchsia-600 to-transparent"></div>
                    <div>
                        <p class="font-black text-gray-900 text-xl tracking-tight">
                            {{ $yayasan->nama_kepala_yayasan ?? 'Dr. Munajat Lc. M.Hi' }}
                        </p>
                        <p class="text-fuchsia-600 font-bold text-sm uppercase tracking-widest">
                            Pimpinan Pondok Pesantren
                        </p>
                    </div>
                </div>
            </div>

            <div class="order-1 md:order-2 relative group max-w-sm mx-auto">
                <div
                    class="absolute inset-0 bg-gradient-to-tr from-purple-600 to-fuchsia-600 rounded-[2rem] rotate-3 scale-105 opacity-20 group-hover:rotate-6 transition-transform duration-500">
                </div>
                @if ($yayasan && $yayasan->foto_kepala_yayasan)
                    <img src="{{ asset('storage/' . $yayasan->foto_kepala_yayasan) }}"
                        alt="Pimpinan Pondok Pesantren Aisyah Samawa"
                        class="relative rounded-[2rem] shadow-2xl w-full object-cover aspect-[4/5] grayscale hover:grayscale-0 transition-all duration-700"
                        style="object-position: center 30%;">
                @else
                    <img src="{{ asset('images/default-avatar.jpg') }}" alt="Pimpinan Pondok Pesantren Aisyah Samawa"
                        class="relative rounded-[2rem] shadow-2xl w-full object-cover aspect-[4/5] grayscale hover:grayscale-0 transition-all duration-700"
                        style="object-position: center 30%;">
                @endif
            </div>
        </div>
    </section>

    {{-- SECTION: PROGRAM UNGGULAN --}}
    <section class="py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-fuchsia-600 font-black tracking-[0.4em] text-sm mb-4 uppercase">Keunggulan Kami</h2>
                <h3 class="text-4xl md:text-5xl font-black text-gray-900 tracking-tighter uppercase">Program <span
                        class="text-fuchsia-600">Unggulan</span></h3>
                <div class="w-20 h-1.5 bg-gradient-to-r from-purple-600 to-fuchsia-500 mx-auto mt-3 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">

                {{-- Program 1: Tahfidz --}}
                <div class="group bg-white border border-purple-200 shadow-xl rounded-[2.5rem] p-12 cursor-pointer flex flex-col items-center justify-center text-center overflow-hidden h-[380px] hover:h-[500px] transition-all duration-500 ease-in-out"
                    onclick="this.classList.toggle('expanded')">
<<<<<<< HEAD

                    {{-- Container Icon & Judul (Kondisi Awal) --}}
                    <div class="transition-all duration-500 flex flex-col items-center"
                        :class="open ? 'translate-y-0 scale-90' : 'translate-y-8'">

                        {{-- Icon / Logo --}}
                        <div class="bg-purple-100 rounded-[1.8rem] flex items-center justify-center shadow-md transition-all duration-500 ease-in-out w-24 h-24 mb-8 group-hover:w-16 group-hover:h-16 group-hover:mb-4 [.expanded_&]:w-16 [.expanded_&]:h-16 [.expanded_&]:mb-4"
                            :class="open ? 'w-16 h-16 mb-4' : 'w-24 h-24 mb-8'">
=======
                    <div
                        class="flex flex-col items-center transition-all duration-500 ease-in-out translate-y-10 group-hover:translate-y-0 [.expanded_&]:translate-y-0">
                        <div
                            class="bg-purple-900 rounded-[1.8rem] flex items-center justify-center shadow-md transition-all duration-500 ease-in-out w-24 h-24 mb-8 group-hover:w-16 group-hover:h-16 group-hover:mb-4 [.expanded_&]:w-16 [.expanded_&]:h-16 [.expanded_&]:mb-4">
>>>>>>> 014d5d821af33b40e0cebab99831d1576d66fb11
                            <img src="{{ asset('assets/img/quranic.svg') }}" alt="Tahfidz"
                                class="w-[60%] h-[60%] object-contain">
                        </div>
                        <h4
                            class="font-black text-gray-900 leading-tight transition-all duration-500 ease-in-out text-2xl group-hover:text-xl [.expanded_&]:text-xl">
                            Tahfidz Qur'an<br><span class="text-purple-700">30 Juz</span>
                        </h4>
                    </div>
                    <div
                        class="w-full opacity-0 max-h-0 pointer-events-none group-hover:opacity-100 group-hover:max-h-[200px] group-hover:mt-6 group-hover:pointer-events-auto [.expanded_&]:opacity-100 [.expanded_&]:max-h-[200px] [.expanded_&]:mt-6 [.expanded_&]:pointer-events-auto transition-all duration-500 ease-in-out">
                        <p class="text-gray-600 font-medium leading-relaxed text-sm px-2">
                            Program unggulan hafalan Al-Qur'an 30 Juz dengan metode talaqqi yang terbimbing, mutqin, dan
                            terstruktur bersama para hafizah berpengalaman.
                        </p>
                    </div>
                    <div class="w-10 h-1 bg-purple-600 rounded-full mt-auto"></div>
                </div>

                {{-- Program 2: Bilingual --}}
                <div class="group bg-white border border-purple-200 shadow-xl rounded-[2.5rem] p-12 cursor-pointer flex flex-col items-center justify-center text-center overflow-hidden h-[380px] hover:h-[500px] transition-all duration-500 ease-in-out"
                    onclick="this.classList.toggle('expanded')">
                    <div
                        class="flex flex-col items-center transition-all duration-500 ease-in-out translate-y-10 group-hover:translate-y-0 [.expanded_&]:translate-y-0">
                        <div
                            class="bg-purple-900 rounded-[1.8rem] flex items-center justify-center shadow-md transition-all duration-500 ease-in-out w-24 h-24 mb-8 group-hover:w-16 group-hover:h-16 group-hover:mb-4 [.expanded_&]:w-16 [.expanded_&]:h-16 [.expanded_&]:mb-4">
                            <img src="{{ asset('assets/img/globe.svg') }}" alt="Bilingual"
                                class="w-[60%] h-[60%] object-contain">
                        </div>
                        <h4
                            class="font-black text-gray-900 leading-tight transition-all duration-500 ease-in-out text-2xl group-hover:text-xl [.expanded_&]:text-xl">
                            Bilingual<br><span class="text-purple-700">(Arab & Inggris)</span>
                        </h4>
                    </div>
                    <div
                        class="w-full opacity-0 max-h-0 pointer-events-none group-hover:opacity-100 group-hover:max-h-[200px] group-hover:mt-6 group-hover:pointer-events-auto [.expanded_&]:opacity-100 [.expanded_&]:max-h-[200px] [.expanded_&]:mt-6 [.expanded_&]:pointer-events-auto transition-all duration-500 ease-in-out">
                        <p class="text-gray-600 font-medium leading-relaxed text-sm px-2">
                            Pembelajaran intensif dua bahasa internasional — Arab dan Inggris — sebagai bekal komunikasi
                            global yang berlandaskan nilai islami.
                        </p>
                    </div>
                    <div class="w-10 h-1 bg-purple-600 rounded-full mt-auto"></div>
                </div>

                {{-- Program 3: Kitab Kuning --}}
                <div class="group bg-white border border-purple-200 shadow-xl rounded-[2.5rem] p-12 cursor-pointer flex flex-col items-center justify-center text-center overflow-hidden h-[380px] hover:h-[500px] transition-all duration-500 ease-in-out"
                    onclick="this.classList.toggle('expanded')">
                    <div
                        class="flex flex-col items-center transition-all duration-500 ease-in-out translate-y-10 group-hover:translate-y-0 [.expanded_&]:translate-y-0">
                        <div
                            class="bg-purple-900 rounded-[1.8rem] flex items-center justify-center shadow-md transition-all duration-500 ease-in-out w-24 h-24 mb-8 group-hover:w-16 group-hover:h-16 group-hover:mb-4 [.expanded_&]:w-16 [.expanded_&]:h-16 [.expanded_&]:mb-4">
                            <img src="{{ asset('assets/img/masjid.svg') }}" alt="Kajian Kitab"
                                class="w-[60%] h-[60%] object-contain">
                        </div>
                        <h4
                            class="font-black text-gray-900 leading-tight transition-all duration-500 ease-in-out text-2xl group-hover:text-xl [.expanded_&]:text-xl">
                            Kajian<br><span class="text-purple-700">Kitab Kuning</span>
                        </h4>
                    </div>
                    <div
                        class="w-full opacity-0 max-h-0 pointer-events-none group-hover:opacity-100 group-hover:max-h-[200px] group-hover:mt-6 group-hover:pointer-events-auto [.expanded_&]:opacity-100 [.expanded_&]:max-h-[200px] [.expanded_&]:mt-6 [.expanded_&]:pointer-events-auto transition-all duration-500 ease-in-out">
                        <p class="text-gray-600 font-medium leading-relaxed text-sm px-2">
                            Pengkajian mendalam kitab-kitab klasik ulama salaf sebagai fondasi pemahaman agama yang kokoh
                            sesuai manhaj Ahlus Sunnah Wal Jama'ah.
                        </p>
                    </div>
                    <div class="w-10 h-1 bg-purple-600 rounded-full mt-auto"></div>
                </div>

            </div>
        </div>
    </section>

    {{-- SECTION: BERITA --}}
    <section class="py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16">
                <div>
                    <h2 class="text-4xl font-black text-gray-900 tracking-tight italic">Berita <span
                            class="text-fuchsia-600">Terbaru</span></h2>
                    <p class="text-gray-500 mt-3 text-lg font-medium">Kegiatan, prestasi, dan inspirasi harian santriwati.
                    </p>
                </div>
                <a href="{{ route('kesiswaan') }}"
                    class="group flex items-center gap-3 text-purple-700 font-black uppercase text-sm tracking-widest mt-6 md:mt-0">
                    Lihat Semua
                    <span
                        class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center group-hover:bg-purple-700 group-hover:text-white transition-all shadow-sm">→</span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                @forelse($berita as $b)
                    <div class="group cursor-pointer">
                        <div class="relative overflow-hidden rounded-[2.5rem] mb-6 shadow-2xl h-80">
                            @if ($b->foto)
                                <img src="{{ asset('storage/' . $b->foto) }}"
                                    class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 brightness-75 group-hover:brightness-100"
                                    alt="{{ $b->judul }}">
                            @else
                                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=800"
                                    class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 brightness-75 group-hover:brightness-100"
                                    alt="Berita">
                            @endif
                            <div class="absolute bottom-6 left-6">
                                <span
                                    class="bg-purple-600/80 backdrop-blur-md text-white px-5 py-2 rounded-full text-xs font-black uppercase tracking-[0.2em]">{{ $b->kategori ?? 'Kegiatan' }}</span>
                            </div>
                        </div>
                        <h3
                            class="text-2xl font-black text-gray-900 group-hover:text-fuchsia-600 transition duration-300 leading-snug">
                            {{ $b->judul }}</h3>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-10 text-gray-400 italic">Belum ada berita terbaru.</div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- SECTION: PPDB BANNER --}}
    <section id="ppdb" class="py-24 px-4">
        <div
            class="max-w-6xl mx-auto bg-[rgba(25,15,50,0.55)] rounded-[3.5rem] p-12 md:p-24 text-center text-white shadow-[0_35px_60px_-15px_rgba(25,15,50,0.55)] relative overflow-hidden">
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

    {{-- SCRIPTS UTAMA JAVASCRIPT --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // 1. Inisialisasi Carousel Background Mulus Geser Kesamping
            const swiper = new Swiper('.hero-swiper', {
                loop: true,
                effect: 'slide',
                speed: 1200,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
            });

            // 2. Inisialisasi Animasi Angka Berhitung Otomatis (Counter Up)
            const counters = document.querySelectorAll('.count-number');
            const speed = 60;

            counters.forEach(counter => {
                const animate = () => {
                    const value = +counter.getAttribute('data-target');
                    const data = +counter.innerText;
                    const time = value / speed;

                    if (data < value) {
                        counter.innerText = Math.ceil(data + time);
                        setTimeout(animate, 25);
                    } else {
                        counter.innerText = value;
                    }
                }
                animate();
            });
        });
    </script>
@endsection
