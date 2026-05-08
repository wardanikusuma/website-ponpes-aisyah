@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="relative min-h-screen flex items-center pt-20 bg-purple-900">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/bangunan.jpeg') }}" class="w-full h-full object-cover object-center brightness-50"
                alt="Gedung Aisyah Samawa">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-900/60 to-transparent"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-20 w-full">
            <div class="max-w-4xl text-left">


                <h1 class="text-4xl md:text-7xl font-black text-white leading-tight mb-6 tracking-tighter drop-shadow-2xl">
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

                <div class="flex flex-wrap gap-6 mb-20 md:mb-32">
                    <a href="#ppdb"
                        class="bg-fuchsia-600/30 backdrop-blur-lg text-white border-2 border-fuchsia-500/50 px-10 py-4 rounded-2xl font-black hover:bg-fuchsia-600 transition-all shadow-lg text-lg">
                        DAFTAR PPDB
                    </a>
                    <a href="{{ route('tentang') }}"
                        class="bg-white/10 backdrop-blur-md border-2 border-white text-white px-10 py-4 rounded-2xl font-black hover:bg-white hover:text-purple-900 transition-all text-lg">
                        PROFIL SEKOLAH
                    </a>
                </div>
            </div>

            <div class="relative z-30 -mb-16 md:-mb-20">
                <div
                    class="max-w-xl bg-white/95 backdrop-blur-sm rounded-[1.5rem] p-4 md:p-6 grid grid-cols-3 gap-2 shadow-[0_15px_40px_rgba(0,0,0,0.12)] border border-gray-100">
                    <div class="text-center border-r border-gray-100">
                        <p class="text-2xl md:text-3xl font-black text-purple-900 leading-none">500 +</p>
                        <p class="text-gray-400 font-bold uppercase text-[8px] md:text-[10px] tracking-widest mt-1">Santri
                        </p>
                    </div>
                    <div class="text-center border-r border-gray-100">
                        <p class="text-2xl md:text-3xl font-black text-purple-900 leading-none">50 +</p>
                        <p class="text-gray-400 font-bold uppercase text-[8px] md:text-[10px] tracking-widest mt-1">Pengajar
                        </p>
                    </div>
                    <div class="text-center">
                        <p class="text-2xl md:text-3xl font-black text-purple-900 leading-none">8 +</p>
                        <p class="text-gray-400 font-bold uppercase text-[8px] md:text-[10px] tracking-widest mt-1">Tahun
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-20 items-center mt-10">
            <div class="order-2 md:order-1 relative">
                <div class="absolute -top-4 -left-4 w-20 h-20 bg-purple-100 rounded-full -z-10 opacity-50"></div>
                <h2 class="text-fuchsia-600 font-black text-xs uppercase tracking-[0.3em] mb-4">Sambutan Kepala Sekolah</h2>
                <h3 class="text-4xl font-black text-gray-900 mb-8 leading-tight">Membangun Karakter <br><span
                        class="text-purple-800 tracking-tighter">Berbasis Moralitas</span></h3>

                <div class="space-y-6 text-gray-600 text-lg leading-relaxed font-medium">
                    <p class="border-l-4 border-fuchsia-500 pl-6 italic bg-fuchsia-50/50 py-4 rounded-r-xl text-gray-800">
                        "Pendidikan bukan sekadar transfer ilmu, tapi penanaman adab dan keberanian berpikir."
                    </p>
                    <p>Di Aisyah Samawa, kami memastikan setiap santriwati mendapatkan perhatian personal untuk
                        mengembangkan potensi uniknya dalam lingkungan yang mendukung.</p>
                </div>

                <div class="mt-10 flex items-center gap-4">
                    <div class="w-16 h-1 bg-gradient-to-r from-fuchsia-600 to-transparent"></div>
                    <div>
                        <p class="font-black text-gray-900 text-xl tracking-tight">Tia Kusuma Wardani, S.Mat.</p>
                        <p class="text-fuchsia-600 font-bold text-sm uppercase tracking-widest">Pimpinan Pondok Pesantren
                        </p>
                    </div>
                </div>
            </div>

            <div class="order-1 md:order-2 relative group">
                <div
                    class="absolute inset-0 bg-gradient-to-tr from-purple-600 to-fuchsia-600 rounded-[2rem] rotate-3 scale-105 opacity-20 group-hover:rotate-6 transition-transform duration-500">
                </div>
                <img src="{{ asset('assets/img/foto pimpinan.jpg') }}" alt="Pimpinan Pondok Pesantren Aisyah Samawa"
                    class="relative rounded-[2rem] shadow-2xl w-full object-cover aspect-[4/5] grayscale hover:grayscale-0 transition-all duration-700">
            </div>
        </div>
    </section>

    <section class="py-28 bg-slate-50 border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-20">
                <h2 class="text-fuchsia-600 font-black tracking-[0.4em] text-sm mb-4 uppercase">Our Vision</h2>
                <p class="text-4xl md:text-6xl font-black text-gray-900 mb-4 tracking-tighter">
                    SPIRITUALITY, INTELLECTUALITY, <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-700 to-fuchsia-600">&
                        MORALITY</span>
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Card Header MISI --}}
                <div
                    class="p-10 rounded-[2.5rem] bg-gray-900 text-white flex flex-col justify-center relative overflow-hidden group shadow-2xl">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-purple-500/20 blur-3xl group-hover:bg-purple-500/40 transition-colors">
                    </div>
                    <h3 class="text-5xl font-black mb-6 tracking-tighter text-fuchsia-400 italic">MISI</h3>
                    <p class="text-gray-400 text-lg leading-relaxed font-medium">Komitmen konkret kami untuk mencetak
                        muslimah berkualitas dunia akhirat.</p>
                </div>

                {{-- Misi 1 --}}
                <div
                    class="p-10 rounded-[2.5rem] bg-white border border-slate-200 hover:border-purple-300 transition-all duration-300 shadow-sm hover:shadow-xl group">
                    <div
                        class="w-14 h-14 bg-gradient-to-br from-purple-600 to-fuchsia-600 text-white rounded-2xl flex items-center justify-center font-black text-2xl mb-8 shadow-lg shadow-purple-200 group-hover:scale-110 transition-transform">
                        1</div>
                    <p class="text-gray-800 text-lg font-bold leading-relaxed">
                        Menyelenggarakan sistem pendidikan yang berkualitas dalam frame islami sesuai dengan manhaj
                        <span class="text-purple-700 font-black underline decoration-purple-200">Ahlus Sunnah Wal
                            Jamah.</span>
                    </p>
                </div>

                {{-- Misi 2 --}}
                <div
                    class="p-10 rounded-[2.5rem] bg-gradient-to-br from-purple-700 to-fuchsia-800 text-white shadow-2xl shadow-purple-200 relative overflow-hidden group">
                    <div
                        class="absolute -right-4 -top-4 w-24 h-24 bg-white/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700">
                    </div>
                    <div
                        class="w-14 h-14 bg-white/20 backdrop-blur-md text-white rounded-2xl flex items-center justify-center font-black text-2xl mb-8 border border-white/30">
                        2</div>
                    <p class="leading-relaxed text-xl font-black italic">
                        "Mengupayakan maksimal Tahfidz Al-Qur'an & Sains sebagai Brand Pesantren."
                    </p>
                </div>

                {{-- Misi 3 --}}
                <div
                    class="p-10 rounded-[2.5rem] bg-white border border-slate-200 hover:border-purple-300 transition-all duration-300 shadow-sm hover:shadow-xl group">
                    <div
                        class="w-14 h-14 bg-gradient-to-br from-purple-600 to-fuchsia-600 text-white rounded-2xl flex items-center justify-center font-black text-2xl mb-8 shadow-lg shadow-purple-200 group-hover:scale-110 transition-transform">
                        3</div>
                    <p class="text-gray-800 text-lg font-bold leading-relaxed">
                        Menumbuhkan pemahaman yang mendalam tentang dasar perilaku islami serta
                        <span class="text-purple-700 font-black underline decoration-purple-200">budaya bangsa.</span>
                    </p>
                </div>

                {{-- Misi 4 --}}
                <div
                    class="p-10 rounded-[2.5rem] bg-white border border-slate-200 hover:border-purple-300 transition-all duration-300 shadow-sm hover:shadow-xl group">
                    <div
                        class="w-14 h-14 bg-gradient-to-br from-purple-600 to-fuchsia-600 text-white rounded-2xl flex items-center justify-center font-black text-2xl mb-8 shadow-lg shadow-purple-200 group-hover:scale-110 transition-transform">
                        4</div>
                    <p class="text-gray-800 text-lg font-bold leading-relaxed">
                        Melaksanakan pendidikan dan pembelajaran secara efektif dan menyenangkan dengan tetap mengacu pada
                        <span class="text-purple-700 font-black underline decoration-purple-200">moralitas dan akhlakul
                            karimah.</span>
                    </p>
                </div>

                {{-- Misi 5 --}}
                <div
                    class="p-10 rounded-[2.5rem] bg-gradient-to-br from-purple-700 to-fuchsia-800 text-white shadow-2xl shadow-purple-200 relative overflow-hidden group">
                    <div
                        class="absolute -right-4 -top-4 w-24 h-24 bg-white/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700">
                    </div>
                    <div
                        class="w-14 h-14 bg-white/20 backdrop-blur-md text-white rounded-2xl flex items-center justify-center font-black text-2xl mb-8 border border-white/30">
                        5</div>
                    <p class="leading-relaxed text-xl font-black italic">
                        "Menyelenggarakan pendidikan yang kreatif, inovatif, dan variatif dalam nuansa lingkungan pondok
                        pesantren."
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION: PROGRAM UNGGULAN --}}
    <section class="py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-fuchsia-600 font-black tracking-[0.4em] text-sm mb-4 uppercase">Keunggulan Kami</h2>
                <h3 class="text-4xl md:text-5xl font-black text-gray-900 tracking-tighter">Program <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-purple-700 to-fuchsia-600">Unggulan</span>
                </h3>
                <div class="w-20 h-1.5 bg-gradient-to-r from-purple-600 to-fuchsia-500 mx-auto mt-6 rounded-full"></div>
            </div>

            <style>
                .flip-card {
                    perspective: 1000px;
                }

                .flip-card-inner {
                    position: relative;
                    width: 100%;
                    height: 380px;
                    transform-style: preserve-3d;
                    transition: transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
                }

                .flip-card:hover .flip-card-inner,
                .flip-card.active .flip-card-inner {
                    transform: rotateY(180deg);
                }

                .flip-card-front,
                .flip-card-back {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    backface-visibility: hidden;
                    -webkit-backface-visibility: hidden;
                    border-radius: 2.5rem;
                    overflow: hidden;
                }

                .flip-card-back {
                    transform: rotateY(180deg);
                }
            </style>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Program 1: Tahfidz --}}
                <div class="flip-card cursor-pointer" onclick="this.classList.toggle('active')">
                    <div class="flip-card-inner shadow-xl">
                        {{-- DEPAN --}}
                        <div
                            class="flip-card-front bg-white border border-slate-100 flex flex-col items-center justify-center text-center p-12">
                            <div
                                class="w-24 h-24 bg-purple-100 rounded-[1.8rem] flex items-center justify-center text-5xl mb-8 shadow-md">
                                📖
                            </div>
                            <h4 class="text-2xl font-black text-gray-900 leading-tight">
                                Tahfidz Qur'an<br><span class="text-purple-700">30 Juz</span>
                            </h4>
                            <div class="mt-8 w-10 h-1 bg-purple-200 rounded-full"></div>
                        </div>
                        {{-- BELAKANG --}}
                        <div class="flip-card-back flex flex-col items-center justify-center text-center p-12"
                            style="background: linear-gradient(135deg, #581c87, #7e22ce, #a21caf);">
                            <div
                                class="w-16 h-16 bg-white/10 border border-white/20 rounded-2xl flex items-center justify-center text-3xl mb-6">
                                📖</div>
                            <h4 class="text-xl font-black text-white uppercase tracking-tight mb-5 leading-tight">
                                Tahfidz Qur'an <span class="text-fuchsia-300">30 Juz</span>
                            </h4>
                            <p class="text-purple-100 font-medium leading-relaxed text-sm">
                                Program unggulan hafalan Al-Qur'an 30 juz dengan metode talaqqi yang terbimbing, mutqin, dan
                                terstruktur bersama para hafizah berpengalaman.
                            </p>
                            <div class="mt-6 w-10 h-1 bg-fuchsia-400/60 rounded-full"></div>
                        </div>
                    </div>
                </div>

                {{-- Program 2: Bilingual --}}
                <div class="flip-card cursor-pointer" onclick="this.classList.toggle('active')">
                    <div class="flip-card-inner shadow-xl">
                        {{-- DEPAN --}}
                        <div
                            class="flip-card-front bg-white border border-slate-100 flex flex-col items-center justify-center text-center p-12">
                            <div
                                class="w-24 h-24 bg-purple-100 rounded-[1.8rem] flex items-center justify-center text-5xl mb-8 shadow-md">
                                🌍
                            </div>
                            <h4 class="text-2xl font-black text-gray-900 leading-tight">
                                Bilingual<br><span class="text-purple-700">(Arab & Inggris)</span>
                            </h4>
                            <div class="mt-8 w-10 h-1 bg-purple-200 rounded-full"></div>
                        </div>
                        {{-- BELAKANG --}}
                        <div class="flip-card-back flex flex-col items-center justify-center text-center p-12"
                            style="background: linear-gradient(135deg, #581c87, #7e22ce, #a21caf);">
                            <div
                                class="w-16 h-16 bg-white/10 border border-white/20 rounded-2xl flex items-center justify-center text-3xl mb-6">
                                🌍</div>
                            <h4 class="text-xl font-black text-white uppercase tracking-tight mb-5 leading-tight">
                                Bilingual <span class="text-fuchsia-300">(Arab & Inggris)</span>
                            </h4>
                            <p class="text-purple-100 font-medium leading-relaxed text-sm">
                                Pembelajaran intensif dua bahasa internasional — Arab dan Inggris — sebagai bekal komunikasi
                                global yang berlandaskan nilai islami.
                            </p>
                            <div class="mt-6 w-10 h-1 bg-fuchsia-400/60 rounded-full"></div>
                        </div>
                    </div>
                </div>

                {{-- Program 3: Kitab Kuning --}}
                <div class="flip-card cursor-pointer" onclick="this.classList.toggle('active')">
                    <div class="flip-card-inner shadow-xl">
                        {{-- DEPAN --}}
                        <div
                            class="flip-card-front bg-white border border-slate-100 flex flex-col items-center justify-center text-center p-12">
                            <div
                                class="w-24 h-24 bg-purple-100 rounded-[1.8rem] flex items-center justify-center text-5xl mb-8 shadow-md">
                                📚
                            </div>
                            <h4 class="text-2xl font-black text-gray-900 leading-tight">
                                Kajian<br><span class="text-purple-700">Kitab Kuning</span>
                            </h4>
                            <div class="mt-8 w-10 h-1 bg-purple-200 rounded-full"></div>
                        </div>
                        {{-- BELAKANG --}}
                        <div class="flip-card-back flex flex-col items-center justify-center text-center p-12"
                            style="background: linear-gradient(135deg, #581c87, #7e22ce, #a21caf);">
                            <div
                                class="w-16 h-16 bg-white/10 border border-white/20 rounded-2xl flex items-center justify-center text-3xl mb-6">
                                📚</div>
                            <h4 class="text-xl font-black text-white uppercase tracking-tight mb-5 leading-tight">
                                Kajian <span class="text-fuchsia-300">Kitab Kuning</span>
                            </h4>
                            <p class="text-purple-100 font-medium leading-relaxed text-sm">
                                Pengkajian mendalam kitab-kitab klasik ulama salaf sebagai fondasi pemahaman agama yang
                                kokoh sesuai manhaj Ahlus Sunnah Wal Jamah.
                            </p>
                            <div class="mt-6 w-10 h-1 bg-fuchsia-400/60 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-[2.5rem] mb-6 shadow-2xl h-80">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=800"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 brightness-75 group-hover:brightness-100"
                            alt="Berita">
                        <div class="absolute bottom-6 left-6">
                            <span
                                class="bg-purple-600/80 backdrop-blur-md text-white px-5 py-2 rounded-full text-xs font-black uppercase tracking-[0.2em]">
                                Kegiatan
                            </span>
                        </div>
                    </div>
                    <h3
                        class="text-2xl font-black text-gray-900 group-hover:text-fuchsia-600 transition duration-300 leading-snug">
                        Kunjungan Edukasi: Memperluas Cakrawala di Perpustakaan Nasional
                    </h3>
                </div>
            </div>
        </div>
    </section>

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
                    <a href="#"
                        class="bg-white text-purple-900 px-14 py-6 rounded-2xl font-black shadow-2xl hover:scale-105 active:scale-95 transition-all text-xl uppercase tracking-widest">
                        DAFTAR PPDB ONLINE
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
