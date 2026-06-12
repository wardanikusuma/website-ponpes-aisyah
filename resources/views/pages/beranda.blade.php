<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

{{-- Tautan CSS Swiper untuk mengatur pergeseran gambar agar rapi --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    {{-- HERO SECTION (overflow-hidden dihapus agar kotak statistik yang menjorok ke bawah tidak terpotong/hilang) --}}
    <section class="relative min-h-screen flex flex-col justify-between pt-20 bg-gray-950">

        {{-- WADAH UTAMA SLIDER BERGESER (SWIPER CAROUSEL) --}}
        <div class="swiper hero-swiper absolute inset-0 z-0 w-full h-full overflow-hidden">
            <div class="swiper-wrapper">

                <div class="swiper-slide w-full h-full">
                    <img src="{{ asset('assets/img/bangunan.jpeg') }}"
                        class="w-full h-full object-cover object-center brightness-[0.45]" alt="Gedung Aisyah Samawa">
                </div>

                <div class="swiper-slide w-full h-full">
                    <img src="{{ asset('assets/img/kegiatan.jpeg') }}"
                        class="w-full h-full object-cover object-center brightness-[0.45]" alt="Kegiatan Aisyah Samawa">
                </div>

                <div class="swiper-slide w-full h-full">
                    <img src="{{ asset('assets/img/bg4.jpg') }}"
                        class="w-full h-full object-cover object-center brightness-[0.45]" alt="Fasilitas Aisyah Samawa">
                </div>

                <div class="swiper-slide w-full h-full">
                    <img src="{{ asset('assets/img/bg2.jpeg') }}"
                        class="w-full h-full object-cover object-center brightness-[0.45]" alt="Lingkungan Aisyah Samawa">
                </div>

            </div>

            {{-- Lapisan gradien konstan di atas foto agar teks putih selalu tajam dibaca --}}
            <div
                class="absolute inset-0 bg-gradient-to-r from-gray-950/80 via-purple-950/20 to-transparent z-10 pointer-events-none">
            </div>
        </div>

        {{-- KONTEN UTAMA HERO --}}
        <div class="max-w-7xl mx-auto px-6 relative z-20 w-full flex-1 flex items-center pt-12 md:pt-20">
            <div class="max-w-4xl text-left">


                <h1 class="text-4xl md:text-7xl font-black  text-white leading-tight mb-6 tracking-tighter drop-shadow-2xl">
                    Membentuk Generasi yang <br>
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-300 via-purple-100 to-indigo-200 uppercase">
                        Berilmu dan Berakhlak
                    </span>
                </h1>

                <p class="text-lg md:text-2xl text-purple-100 font-medium leading-relaxed drop-shadow-md mb-4">
                    Selamat datang di sumber informasi Pondok Pesantren Aisyah Samawa.
                </p>

                <p class="italic text-fuchsia-300 text-2xl md:text-3xl font-bold mb-10 drop-shadow-lg">
                    "Spirituality, Intellectuality, and Morality"
                </p>

                <div class="flex flex-wrap gap-6">
                    <a href="{{ route('ppdb.landing') }}"
                        class="bg-fuchsia-600/30 backdrop-blur-lg text-white border-2 border-fuchsia-500/50 px-10 py-4 rounded-2xl font-black hover:bg-fuchsia-600 transition-all shadow-lg text-lg">
                        DAFTAR PPDB
                    </a>
                    <a href="{{ route('tentang') }}"
                        class="bg-white/10 backdrop-blur-md border-2 border-white text-white px-10 py-4 rounded-2xl font-black hover:bg-white hover:text-purple-900 transition-all text-lg">
                        PROFIL SEKOLAH
                    </a>
                </div>
            </div>
        </div>

        {{-- KOTAK STATISTIK MELAYANG SETENGAH DI ATAS HERO, SETENGAH DI ATAS PUTIH (z-30 memastikan dia di paling depan) --}}
        <div class="relative z-30 w-full max-w-6xl mx-auto px-4 md:px-6 -mb-20 md:-mb-24">
            <div
                class="w-full bg-purple-950/95 backdrop-blur-md rounded-[2rem] py-8 md:py-12 px-6 grid grid-cols-2 md:grid-cols-4 gap-y-8 shadow-[0_25px_50px_-12px_rgba(0,0,0,0.5)] border border-purple-800/40">

                <div class="text-center md:border-r border-purple-800/60 px-2">
                    <p class="text-4xl md:text-6xl font-black text-white leading-none tracking-tight">
                        <span class="count-number" data-target="500">0</span> +
                    </p>
                    <p class="text-purple-300 font-bold uppercase text-[10px] md:text-xs tracking-widest mt-3">Total
                        Santriwati</p>
                </div>

                <div class="text-center md:border-r border-purple-800/60 px-2">
                    <p class="text-4xl md:text-6xl font-black text-white leading-none tracking-tight">
                        <span class="count-number" data-target="50">0</span> +
                    </p>
                    <p class="text-purple-300 font-bold uppercase text-[10px] md:text-[10px] tracking-widest mt-3">Guru &
                        Pengajar</p>
                </div>

                <div class="text-center md:border-r border-purple-800/60 px-2">
                    <p class="text-4xl md:text-6xl font-black text-white leading-none tracking-tight">
                        <span class="count-number" data-target="8">0</span> +
                    </p>
                    <p class="text-purple-300 font-bold uppercase text-[10px] md:text-xs tracking-widest mt-3">Tahun Berdiri
                    </p>
                </div>

                <div class="text-center px-2">
                    <p class="text-4xl md:text-6xl font-black text-white leading-none tracking-tight">
                        <span class="count-number" data-target="15">0</span> +
                    </p>
                    <p class="text-purple-300 font-bold uppercase text-[10px] md:text-xs tracking-widest mt-3">Prestasi
                        Unggulan</p>
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

            <div class="order-1 md:order-2 relative group">
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

{{-- SECTION: VISI & MISI --}}
    <section class="py-28 bg-slate-50 border-y border-slate-200 relative overflow-hidden">
        {{-- Dekorasi Latar Belakang Abstrak --}}
        <div class="absolute top-0 left-0 w-96 h-96 bg-purple-300/20 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-fuchsia-300/20 rounded-full blur-3xl translate-x-1/2 translate-y-1/2"></div>

        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <div class="text-center mb-20">
                <h2 class="text-fuchsia-600 font-black tracking-[0.4em] text-sm mb-4 uppercase">Our Vision</h2>
                <p class="text-4xl md:text-6xl font-black text-gray-900 mb-4 tracking-tighter">
                    SPIRITUALITY, INTELLECTUALITY, <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-700 to-fuchsia-600">& MORALITY</span>
                </p>
                <div class="w-24 h-1.5 bg-gradient-to-r from-purple-600 to-fuchsia-500 mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                
                {{-- Card Header MISI --}}
                <div class="p-10 rounded-[2rem] bg-gray-900 text-white flex flex-col justify-center relative overflow-hidden group shadow-2xl h-full min-h-[250px]">
                    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10"></div>
                    <div class="absolute -right-10 -bottom-10 w-48 h-48 bg-fuchsia-600/30 blur-3xl group-hover:bg-fuchsia-500/50 transition-colors duration-700"></div>
                    <div class="relative z-10">
                        <h3 class="text-5xl font-black mb-4 tracking-tighter text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-400 to-purple-300">MISI KAMI</h3>
                        <p class="text-gray-400 text-lg leading-relaxed font-medium">Komitmen konkret kami untuk mencetak muslimah berkualitas yang unggul di dunia dan akhirat.</p>
                    </div>
                </div>

                {{-- Misi 1 --}}
                <div class="relative p-10 rounded-[2rem] bg-white border border-purple-100 hover:border-purple-300 shadow-sm hover:shadow-2xl transition-all duration-500 group overflow-hidden z-10 h-full min-h-[250px]">
                    <div class="absolute -right-4 -top-8 text-[140px] font-black text-slate-50 group-hover:text-purple-50 transition-colors duration-500 z-0 select-none">1</div>
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="w-12 h-12 bg-purple-50 text-purple-700 rounded-xl flex items-center justify-center font-black text-xl mb-6 group-hover:bg-gradient-to-br group-hover:from-purple-600 group-hover:to-fuchsia-600 group-hover:text-white transition-all duration-500 shadow-sm">01</div>
                        <p class="text-gray-700 text-lg leading-relaxed">
                            Menyelenggarakan sistem pendidikan yang berkualitas dalam frame islami sesuai dengan manhaj <span class="font-bold text-purple-700">Ahlus Sunnah Wal Jama'ah.</span>
                        </p>
                    </div>
                    <div class="absolute bottom-0 left-0 w-0 h-1.5 bg-gradient-to-r from-purple-600 to-fuchsia-600 group-hover:w-full transition-all duration-700 ease-in-out"></div>
                </div>

                {{-- Misi 2 --}}
                <div class="relative p-10 rounded-[2rem] bg-white border border-purple-100 hover:border-purple-300 shadow-sm hover:shadow-2xl transition-all duration-500 group overflow-hidden z-10 h-full min-h-[250px]">
                    <div class="absolute -right-4 -top-8 text-[140px] font-black text-slate-50 group-hover:text-purple-50 transition-colors duration-500 z-0 select-none">2</div>
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="w-12 h-12 bg-purple-50 text-purple-700 rounded-xl flex items-center justify-center font-black text-xl mb-6 group-hover:bg-gradient-to-br group-hover:from-purple-600 group-hover:to-fuchsia-600 group-hover:text-white transition-all duration-500 shadow-sm">02</div>
                        <p class="text-gray-700 text-lg leading-relaxed">
                            Mengupayakan secara maksimal program <span class="font-bold text-purple-700">Tahfidz Al-Qur'an & Sains</span> sebagai *Brand* keunggulan Pesantren.
                        </p>
                    </div>
                    <div class="absolute bottom-0 left-0 w-0 h-1.5 bg-gradient-to-r from-purple-600 to-fuchsia-600 group-hover:w-full transition-all duration-700 ease-in-out"></div>
                </div>

                {{-- Misi 3 --}}
                <div class="relative p-10 rounded-[2rem] bg-white border border-purple-100 hover:border-purple-300 shadow-sm hover:shadow-2xl transition-all duration-500 group overflow-hidden z-10 h-full min-h-[250px]">
                    <div class="absolute -right-4 -top-8 text-[140px] font-black text-slate-50 group-hover:text-purple-50 transition-colors duration-500 z-0 select-none">3</div>
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="w-12 h-12 bg-purple-50 text-purple-700 rounded-xl flex items-center justify-center font-black text-xl mb-6 group-hover:bg-gradient-to-br group-hover:from-purple-600 group-hover:to-fuchsia-600 group-hover:text-white transition-all duration-500 shadow-sm">03</div>
                        <p class="text-gray-700 text-lg leading-relaxed">
                            Menumbuhkan pemahaman yang mendalam tentang dasar perilaku islami serta pelestarian <span class="font-bold text-purple-700">budaya bangsa.</span>
                        </p>
                    </div>
                    <div class="absolute bottom-0 left-0 w-0 h-1.5 bg-gradient-to-r from-purple-600 to-fuchsia-600 group-hover:w-full transition-all duration-700 ease-in-out"></div>
                </div>

                {{-- Misi 4 --}}
                <div class="relative p-10 rounded-[2rem] bg-white border border-purple-100 hover:border-purple-300 shadow-sm hover:shadow-2xl transition-all duration-500 group overflow-hidden z-10 h-full min-h-[250px]">
                    <div class="absolute -right-4 -top-8 text-[140px] font-black text-slate-50 group-hover:text-purple-50 transition-colors duration-500 z-0 select-none">4</div>
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="w-12 h-12 bg-purple-50 text-purple-700 rounded-xl flex items-center justify-center font-black text-xl mb-6 group-hover:bg-gradient-to-br group-hover:from-purple-600 group-hover:to-fuchsia-600 group-hover:text-white transition-all duration-500 shadow-sm">04</div>
                        <p class="text-gray-700 text-lg leading-relaxed">
                            Melaksanakan pendidikan dan pembelajaran secara efektif dan menyenangkan dengan mengacu pada <span class="font-bold text-purple-700">moralitas dan akhlakul karimah.</span>
                        </p>
                    </div>
                    <div class="absolute bottom-0 left-0 w-0 h-1.5 bg-gradient-to-r from-purple-600 to-fuchsia-600 group-hover:w-full transition-all duration-700 ease-in-out"></div>
                </div>

                {{-- Misi 5 --}}
                <div class="relative p-10 rounded-[2rem] bg-white border border-purple-100 hover:border-purple-300 shadow-sm hover:shadow-2xl transition-all duration-500 group overflow-hidden z-10 h-full min-h-[250px]">
                    <div class="absolute -right-4 -top-8 text-[140px] font-black text-slate-50 group-hover:text-purple-50 transition-colors duration-500 z-0 select-none">5</div>
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="w-12 h-12 bg-purple-50 text-purple-700 rounded-xl flex items-center justify-center font-black text-xl mb-6 group-hover:bg-gradient-to-br group-hover:from-purple-600 group-hover:to-fuchsia-600 group-hover:text-white transition-all duration-500 shadow-sm">05</div>
                        <p class="text-gray-700 text-lg leading-relaxed">
                            Menyelenggarakan pendidikan yang <span class="font-bold text-purple-700">kreatif, inovatif, dan variatif</span> dalam nuansa lingkungan pondok pesantren yang asri.
                        </p>
                    </div>
                    <div class="absolute bottom-0 left-0 w-0 h-1.5 bg-gradient-to-r from-purple-600 to-fuchsia-600 group-hover:w-full transition-all duration-700 ease-in-out"></div>
                </div>

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
