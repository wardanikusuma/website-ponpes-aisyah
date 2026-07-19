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
    {{-- SECTION: JENJANG PENDIDIKAN --}}
    <section id="jenjang" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-black text-slate-900 mb-4">Jenjang Pendidikan</h3>
                <p class="text-slate-500">Pilih tingkat pendidikan yang sesuai untuk melihat informasi lebih lanjut</p>
            </div>

            {{-- Grid Layout untuk 4 kartu yang sejajar --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $jenjangs = [
                        [
                            'title' => 'PAUD',
                            'desc' => 'PAUD Nurul Islam',
                            'detail' =>
                                'Pendidikan anak usia dini untuk membentuk generasi yang ceria, kreatif, dan berakhlak mulia.',
                            'image' => 'SD.png',
                            'btn' => 'border-rose-500 text-rose-600 hover:bg-rose-500 hover:text-white',
                        ],
                        [
                            'title' => 'SD',
                            'desc' => 'SD Nurul Islam',
                            'detail' =>
                                'Pendidikan dasar dengan kurikulum unggulan dan nilai-nilai Islam untuk masa depan cerah.',
                            'image' => 'SD.png',
                            'btn' => 'border-emerald-500 text-emerald-600 hover:bg-emerald-500 hover:text-white',
                        ],
                        [
                            'title' => 'SMP',
                            'desc' => 'SMP Plus Aisyah Samawa',
                            'detail' =>
                                'Membentuk karakter, prestasi, dan kemandirian siswa dalam lingkungan islami yang kondusif.',
                            'image' => 'SMP.png',
                            'btn' => 'border-sky-500 text-sky-600 hover:bg-sky-500 hover:text-white',
                        ],
                        [
                            'title' => 'SMA',
                            'desc' => 'SMA Plus Aisyah Samawa',
                            'detail' =>
                                'Persiapan menuju pendidikan tinggi dan dunia profesional dengan akhlak dan kompetensi unggul.',
                            'image' => 'SMA.png',
                            'btn' => 'border-indigo-500 text-indigo-600 hover:bg-indigo-500 hover:text-white',
                        ],
                    ];
                @endphp

                @foreach ($jenjangs as $j)
                    <div
                        class="flex flex-col items-center p-8 bg-white border border-slate-200 rounded-3xl shadow-sm hover:shadow-lg transition-all duration-300">
                        {{-- Logo --}}
                        <div class="mb-6 w-24 h-24">
                            <img src="{{ asset('assets/img/Jenjang/' . $j['image']) }}" alt="{{ $j['title'] }}"
                                class="w-full h-full object-contain">
                        </div>

                        {{-- Informasi --}}
                        <h4 class="text-2xl font-black text-slate-900">{{ $j['title'] }}</h4>
                        <p class="text-sm font-semibold text-slate-600 mb-4">{{ $j['desc'] }}</p>
                        <p class="text-sm text-slate-500 text-center mb-8 flex-grow">{{ $j['detail'] }}</p>

                        {{-- Tombol Selengkapnya --}}
                        {{-- <a href="#"
                            class="px-6 py-2 border-2 {{ $j['btn'] }} rounded-full text-sm font-bold transition-all duration-300">
                            Lihat Selengkapnya
                        </a> --}}
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 3. SECTION: KURIKULUM --}}
    <section id="kurikulum" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-indigo-600 font-bold uppercase tracking-[0.2em] text-sm mb-4">Sistem Pendidikan</h2>
                <h3 class="text-4xl md:text-5xl font-black text-slate-900 mb-4">Kurikulum Terpadu</h3>
                <p class="text-slate-500 max-w-2xl mx-auto">Menggabungkan kurikulum nasional yang berkualitas dengan
                    nilai-nilai keislaman untuk membentuk generasi unggul dan berkarakter.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Kartu Kurikulum Nasional --}}
                <div class="bg-white border border-slate-200 rounded-3xl p-8 shadow-sm hover:shadow-lg transition-all">
                    <div class="flex items-center gap-6 mb-6">
                        <img src="{{ asset('assets/img/logo-kemendikbud.png') }}" alt="Logo Kurikulum Nasional"
                            class="w-30 h-30 object-contain">
                        <div>
                            <h4 class="text-2xl font-black text-slate-900">Kurikulum Nasional</h4>
                            <p class="text-indigo-600 font-bold text-xs uppercase tracking-widest">Kemendikbudristek</p>
                        </div>
                    </div>
                    <p class="text-slate-600 mb-8 leading-relaxed">Penerapan kurikulum standar nasional yang memastikan
                        siswa unggul dalam sains, teknologi, dan pengetahuan umum.</p>

                    {{-- List Poin (Dibuat lebih bersih) --}}
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 bg-slate-50 p-4 rounded-xl border border-slate-100"><span
                                class="text-xl"></span> <span class="text-sm font-semibold text-slate-700">Standar
                                nasional terakreditasi</span></div>
                        <div class="flex items-center gap-3 bg-slate-50 p-4 rounded-xl border border-slate-100"><span
                                class="text-xl"></span> <span class="text-sm font-semibold text-slate-700">Fokus pada
                                akademik dan kompetensi</span></div>
                        <div class="flex items-center gap-3 bg-slate-50 p-4 rounded-xl border border-slate-100"><span
                                class="text-xl"></span> <span class="text-sm font-semibold text-slate-700">Persiapan untuk
                                masa depan</span></div>
                    </div>
                </div>

                {{-- Kartu Kurikulum Pesantren --}}
                <div class="bg-white border border-slate-200 rounded-3xl p-8 shadow-sm hover:shadow-lg transition-all">
                    <div class="flex items-center gap-6 mb-6">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Kurikulum Pesantren"
                            class="w-24 h-24 object-contain">
                        <div>
                            <h4 class="text-2xl font-black text-slate-900">Kurikulum Pesantren</h4>
                            <p class="text-purple-600 font-bold text-xs uppercase tracking-widest">Kajian Kitab & Adab</p>
                        </div>
                    </div>
                    <p class="text-slate-600 mb-8 leading-relaxed">Penggemblengan spiritual, adab, dan pendalaman ilmu agama
                        melalui kurikulum khas pesantren modern.</p>

                    {{-- List Poin --}}
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 bg-purple-50/50 p-4 rounded-xl border border-purple-50"><span
                                class="text-xl"></span> <span class="text-sm font-semibold text-slate-700">Pendalaman
                                Al-Qur'an & Hadis</span></div>
                        <div class="flex items-center gap-3 bg-purple-50/50 p-4 rounded-xl border border-purple-50"><span
                                class="text-xl"></span> <span class="text-sm font-semibold text-slate-700">Kajian kitab
                                klasik & kontemporer</span></div>
                        <div class="flex items-center gap-3 bg-purple-50/50 p-4 rounded-xl border border-purple-50"><span
                                class="text-xl"></span> <span class="text-sm font-semibold text-slate-700">Pembentukan
                                akhlak dan karakter</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 4. SECTION: PROGRAM UNGGULAN --}}
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
                    <div
                        class="flex flex-col items-center transition-all duration-500 ease-in-out translate-y-10 group-hover:translate-y-0 [.expanded_&]:translate-y-0">
                        <div
                            class="bg-purple-900 rounded-[1.8rem] flex items-center justify-center shadow-md transition-all duration-500 ease-in-out w-24 h-24 mb-8 group-hover:w-16 group-hover:h-16 group-hover:mb-4 [.expanded_&]:w-16 [.expanded_&]:h-16 [.expanded_&]:mb-4">
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


    {{-- 5. SECTION: PPDB (Vibrant Gradient CTA) --}}
    {{-- SECTION: PPDB BANNER --}}
    {{-- <section id="ppdb" class="py-24 px-4">
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
    </section> --}}

@endsection
