@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

    {{-- HERO SECTION --}}
    <section class="relative min-h-screen flex items-center pt-20 bg-purple-900">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/bangunan.jpeg') }}" class="w-full h-full object-cover object-center brightness-50" alt="Tentang Aisyah Samawa">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-900/60 to-transparent"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-20 w-full">
            <div class="max-w-4xl mx-auto text-center">
                <span class="inline-block px-4 py-1.5 mb-6 text-xs font-black tracking-[0.2em] text-fuchsia-300 uppercase bg-fuchsia-500/10 backdrop-blur-md rounded-full border border-fuchsia-500/20">
                    Profil Lembaga
                </span>

                <h1 class="text-5xl md:text-8xl font-black text-white leading-tight mb-6 tracking-tighter drop-shadow-2xl">
                    TENTANG
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-300 via-purple-100 to-indigo-200 uppercase">
                        Kami
                    </span>
                </h1>

                <p class="text-lg md:text-2xl text-purple-100 font-medium leading-relaxed drop-shadow-md mb-4">
                    Mengenal lebih dekat Pondok Pesantren Modern Aisyah Samawa, pusat keunggulan pendidikan muslimah di Sumbawa.
                </p>
            </div>
        </div>
    </section>

    {{-- 1. PROFIL --}}
    <section id="profil" class="py-28 bg-white relative overflow-hidden scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-20 items-center">
            <div>
                <h2 class="text-fuchsia-600 font-black text-xs uppercase tracking-[0.3em] mb-4">Profil Pondok</h2>
                <h3 class="text-4xl font-black text-gray-900 mb-8 leading-tight">Dedikasi untuk <br><span class="text-purple-800 tracking-tighter italic">Pendidikan Muslimah</span></h3>
                <div class="space-y-6 text-gray-600 text-lg leading-relaxed font-medium">
                    <p>Pondok Pesantren Modern Aisyah Samawa adalah lembaga pendidikan Islam yang berkomitmen mencetak generasi muslimah unggul. Berlokasi di jantung Sumbawa Besar, kami memadukan tradisi keislaman yang kuat dengan kurikulum modern yang dinamis.</p>
                    <p>Kami percaya bahwa setiap santriwati memiliki potensi besar untuk menjadi pemimpin, ilmuwan, dan pendidik di masa depan dengan fondasi akhlak yang kokoh.</p>
                </div>
            </div>

            <div class="relative group">
                <div class="absolute inset-0 bg-gradient-to-tr from-purple-600 to-fuchsia-600 rounded-[2rem] rotate-3 scale-105 opacity-20 transition-transform duration-500 group-hover:rotate-6"></div>
                <img src="https://images.unsplash.com/photo-1541829070764-84a7d30dee93?auto=format&fit=crop&q=80&w=800"
                    alt="Profil Pondok"
                    class="relative rounded-[2rem] shadow-2xl w-full object-cover aspect-[4/3]">
            </div>
        </div>
    </section>

    {{-- 2. VISI & MISI --}}
    <section id="visi" class="py-24 md:py-28 bg-[#fbf9ff] border-y border-purple-100 scroll-mt-24 relative overflow-hidden">
        {{-- Ornamen latar lembut --}}
        <div class="absolute -top-28 -right-20 w-80 h-80 rounded-full bg-fuchsia-200/25 blur-2xl"></div>
        <div class="absolute -bottom-40 -left-20 w-[32rem] h-72 rounded-[50%] bg-purple-200/30 -rotate-12"></div>
        <div class="absolute top-48 left-8 w-28 h-28 opacity-25 bg-[radial-gradient(circle,#a855f7_2px,transparent_2px)] bg-[length:16px_16px]"></div>
        <div class="absolute bottom-36 right-10 w-28 h-28 opacity-20 bg-[radial-gradient(circle,#c026d3_2px,transparent_2px)] bg-[length:16px_16px]"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
            {{-- Visi tetap dipertahankan --}}
            <div class="max-w-5xl mx-auto mb-24 text-center mission-reveal">
                <span class="inline-flex px-5 py-2 rounded-full bg-purple-100/80 text-purple-700 text-xs font-black tracking-[0.2em] uppercase mb-5">
                    Arah dan Tujuan Kami
                </span>
                <h2 class="text-4xl md:text-6xl font-black text-[#160735] tracking-tighter mb-8">
                    VISI <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-fuchsia-500">KAMI</span>
                </h2>
                <div class="group relative rounded-[2rem] bg-gradient-to-r from-[#2d0a64] via-purple-800 to-fuchsia-700 p-[1px] shadow-xl shadow-purple-200/70 overflow-hidden">
                    <div class="relative rounded-[calc(2rem-1px)] bg-white/95 px-8 py-10 md:px-16 md:py-12 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-50/80 via-white to-fuchsia-50/80"></div>
                        <p class="relative text-xl md:text-3xl font-bold leading-relaxed text-[#2b1455] tracking-tight">
                            “Menjadi lembaga pendidikan muslimah terkemuka yang melahirkan generasi berakhlak mulia, cerdas intelektual, dan mandiri secara ekonomi.”
                        </p>
                    </div>
                </div>
            </div>

            {{-- Judul misi mengikuti komposisi referensi --}}
            <div class="text-center max-w-3xl mx-auto mb-16 mission-reveal">
                <span class="inline-flex px-5 py-2 rounded-full bg-fuchsia-100/70 text-purple-700 text-xs font-black tracking-[0.16em] uppercase mb-5">
                    Mengapa Memilih Kami
                </span>
                <h2 class="text-4xl md:text-6xl font-black text-[#160735] tracking-tighter">
                    MISI <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-fuchsia-500">KAMI</span>
                </h2>
                <div class="flex items-center justify-center gap-4 my-5 text-fuchsia-500">
                    <span class="w-16 h-px bg-gradient-to-r from-transparent to-fuchsia-400"></span>
                    <span class="text-xl">✿</span>
                    <span class="w-16 h-px bg-gradient-to-l from-transparent to-fuchsia-400"></span>
                </div>
                <p class="text-slate-600 text-base md:text-lg font-medium leading-relaxed">
                    Komitmen konkret kami untuk mencetak muslimah berkualitas yang unggul di dunia dan akhirat.
                </p>
            </div>

            @php
                $missions = [
                    [
                        'number' => '01',
                        'title' => 'Pendidikan Berkualitas',
                        'description' => "Menyelenggarakan sistem pendidikan yang berkualitas dalam frame islami sesuai dengan manhaj Ahlus Sunnah Wal Jama’ah.",
                        'icon' => 'book',
                    ],
                    [
                        'number' => '02',
                        'title' => "Tahfidz Al-Qur’an & Sains",
                        'description' => "Mengupayakan secara maksimal program Tahfidz Al-Qur’an & Sains sebagai brand keunggulan pesantren.",
                        'icon' => 'quran',
                    ],
                    [
                        'number' => '03',
                        'title' => 'Budaya Bangsa',
                        'description' => 'Menumbuhkan pemahaman yang mendalam tentang dasar perilaku islami serta pelestarian budaya bangsa.',
                        'icon' => 'people',
                    ],
                    [
                        'number' => '04',
                        'title' => 'Akhlakul Karimah',
                        'description' => 'Melaksanakan pendidikan dan pembelajaran secara efektif dan menyenangkan dengan mengacu pada moralitas dan akhlakul karimah.',
                        'icon' => 'graduate',
                    ],
                    [
                        'number' => '05',
                        'title' => 'Kreatif, Inovatif & Variatif',
                        'description' => 'Menyelenggarakan pendidikan yang kreatif, inovatif, dan variatif dalam nuansa lingkungan pondok pesantren yang asri.',
                        'icon' => 'idea',
                    ],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-x-6 gap-y-20 lg:gap-y-16 max-w-6xl mx-auto pt-4">
                @foreach ($missions as $index => $mission)
                    <article class="mission-card mission-reveal group relative lg:col-span-2 {{ $index === 3 ? 'lg:col-start-2' : '' }} bg-white rounded-[1.75rem] px-7 pt-16 pb-10 min-h-[280px] text-center border border-purple-100 shadow-[0_18px_45px_-18px_rgba(88,28,135,0.25)] hover:-translate-y-3 hover:shadow-[0_28px_55px_-18px_rgba(126,34,206,0.38)] transition-all duration-500"
                        style="--mission-delay: {{ $index * 110 }}ms">
                        <div class="absolute top-6 left-6 w-12 h-12 rounded-xl bg-gradient-to-br from-purple-50 to-fuchsia-100 text-purple-800 flex items-center justify-center text-lg font-black">
                            {{ $mission['number'] }}
                        </div>

                        <div class="mission-icon absolute -top-11 left-1/2 -translate-x-1/2 w-[88px] h-[88px] rounded-full p-2 bg-white shadow-xl shadow-purple-200/70 border border-purple-100">
                            <div class="w-full h-full rounded-full bg-gradient-to-br from-fuchsia-500 via-purple-600 to-violet-800 text-white flex items-center justify-center ring-1 ring-fuchsia-300 ring-offset-4 ring-offset-purple-50">
                                @if ($mission['icon'] === 'book')
                                    <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M4 5.5A2.5 2.5 0 016.5 3H11v16H6.5A2.5 2.5 0 004 21.5v-16zM20 5.5A2.5 2.5 0 0017.5 3H13v16h4.5a2.5 2.5 0 012.5 2.5v-16z" /></svg>
                                @elseif ($mission['icon'] === 'quran')
                                    <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M4 5l8 4 8-4-8-3-8 3zM4 10l8 4 8-4M4 15l8 4 8-4" /></svg>
                                @elseif ($mission['icon'] === 'people')
                                    <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M16 20v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2M9 10a4 4 0 100-8 4 4 0 000 8zM22 20v-2a4 4 0 00-3-3.87M16 2.13a4 4 0 010 7.75" /></svg>
                                @elseif ($mission['icon'] === 'graduate')
                                    <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M3 8l9-5 9 5-9 5-9-5zM7 10.5V15c2.8 2 7.2 2 10 0v-4.5M21 8v6" /></svg>
                                @else
                                    <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M9 18h6M10 22h4M8.2 14.5A7 7 0 1115.8 14.5 5 5 0 0014 18h-4a5 5 0 00-1.8-3.5zM12 2v2M4.9 4.9l1.4 1.4M19.1 4.9l-1.4 1.4" /></svg>
                                @endif
                            </div>
                        </div>

                        <h3 class="text-xl font-black text-purple-900 mb-4 leading-tight">{{ $mission['title'] }}</h3>
                        <p class="text-slate-600 text-sm leading-7 font-medium">{{ $mission['description'] }}</p>
                        <div class="w-12 h-0.5 bg-gradient-to-r from-purple-500 to-fuchsia-400 mx-auto mt-6 group-hover:w-24 transition-all duration-500"></div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <style>
        .mission-reveal {
            opacity: 0;
            transform: translateY(34px);
            transition: opacity 700ms ease var(--mission-delay, 0ms), transform 700ms ease var(--mission-delay, 0ms);
        }

        .mission-reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .mission-card.is-visible:hover {
            transform: translateY(-12px);
        }

        .mission-icon {
            animation: mission-icon-float 3.4s ease-in-out infinite;
        }

        @keyframes mission-icon-float {
            0%, 100% { margin-top: 0; }
            50% { margin-top: -7px; }
        }

        @media (prefers-reduced-motion: reduce) {
            .mission-reveal,
            .mission-reveal.is-visible,
            .mission-card.is-visible:hover {
                opacity: 1;
                transform: none;
                transition: none;
            }

            .mission-icon {
                animation: none;
            }
        }
    </style>

    {{-- 3. AKREDITASI --}}
    <section id="akreditasi" class="py-28 bg-gray-900 text-white relative overflow-hidden scroll-mt-24">
        <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-purple-900/20 to-transparent"></div>
        <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
            <h2 class="text-fuchsia-400 font-black tracking-[0.4em] text-sm mb-12 uppercase">Kualitas & Legalitas</h2>

            <div class="flex flex-col items-center">
                <div class="w-32 h-32 bg-white rounded-[2rem] flex items-center justify-center mb-8 shadow-2xl shadow-purple-500/20 transform hover:scale-110 transition-transform">
                    <span class="text-6xl font-black text-purple-700">A</span>
                </div>
                <h3 class="text-4xl font-black mb-6 tracking-tight">Akreditasi Unggul</h3>
                <p class="text-gray-400 text-xl font-medium leading-relaxed mb-12">
                    Pondok Pesantren Modern Aisyah Samawa telah terakreditasi "A" (Unggul) oleh Badan Akreditasi Nasional, membuktikan standar kualitas pendidikan yang kami selenggarakan.
                </p>

                <div class="inline-flex items-center gap-4 px-8 py-4 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm">
                    <svg class="w-6 h-6 text-fuchsia-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    <span class="font-bold text-sm tracking-widest uppercase text-gray-300">Izin Kemenag No: 123/SK/2017</span>
                </div>
            </div>
        </div>
    </section>

    {{-- 4. STRUKTUR ORGANISASI --}}
    <section id="struktur" class="py-28 bg-white scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-20">
                <h2 class="text-purple-700 font-black tracking-[0.4em] text-sm mb-4 uppercase">Kepengurusan</h2>
                <h3 class="text-4xl md:text-5xl font-black text-gray-900 tracking-tighter">Struktur <span class="text-fuchsia-600">Organisasi</span></h3>
            </div>

            <div class="relative p-8 md:p-16 bg-slate-50 rounded-[4rem] border border-slate-200 overflow-hidden shadow-inner">
                <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-purple-100/20 to-transparent opacity-50"></div>
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=1200"
                    alt="Struktur Organisasi"
                    class="relative w-full rounded-3xl shadow-2xl filter grayscale hover:grayscale-0 transition-all duration-700">

                <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-8 relative z-10 text-center">
                    <div class="p-6">
                        <p class="font-black text-2xl text-gray-900">Pembina</p>
                        <p class="text-purple-600 font-bold text-sm uppercase tracking-widest mt-2">Yayasan Aisyah</p>
                    </div>
                    <div class="p-6">
                        <p class="font-black text-2xl text-gray-900">Mudir</p>
                        <p class="text-purple-600 font-bold text-sm uppercase tracking-widest mt-2">Pimpinan Pondok</p>
                    </div>
                    <div class="p-6">
                        <p class="font-black text-2xl text-gray-900">Kepala Sekolah</p>
                        <p class="text-purple-600 font-bold text-sm uppercase tracking-widest mt-2">Kurikulum & Kesiswaan</p>
                    </div>
                    <div class="p-6">
                        <p class="font-black text-2xl text-gray-900">Bendahara</p>
                        <p class="text-purple-600 font-bold text-sm uppercase tracking-widest mt-2">Keuangan & Aset</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 5. FASILITAS --}}
    <section id="fasilitas" class="py-28 bg-slate-50 border-t border-slate-200 scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-20">
                <h2 class="text-fuchsia-600 font-black tracking-[0.4em] text-sm mb-4 uppercase">Sarana & Prasarana</h2>
                <h3 class="text-4xl md:text-5xl font-black text-gray-900 tracking-tighter">Fasilitas <span class="text-purple-700">Kami</span></h3>
                <p class="mt-6 text-gray-500 text-lg font-medium max-w-2xl mx-auto leading-relaxed">
                    Kami menyediakan fasilitas modern dan nyaman untuk mendukung proses belajar dan kehidupan santriwati sehari-hari.
                </p>
            </div>

            {{-- Grid Fasilitas Utama --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">

                {{-- Asrama --}}
                <div class="group relative rounded-[2rem] overflow-hidden aspect-[4/3] shadow-xl">
                    <img src="https://images.unsplash.com/photo-1555854877-bab0e564b8d5?auto=format&fit=crop&q=80&w=800"
                        alt="Asrama Santriwati"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 brightness-75">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/30 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <div class="w-10 h-10 bg-purple-600 rounded-xl flex items-center justify-center mb-3">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        </div>
                        <h4 class="text-white font-black text-2xl tracking-tight">Asrama Santriwati</h4>
                        <p class="text-gray-300 text-sm font-medium mt-1">Hunian nyaman & kondusif untuk belajar</p>
                    </div>
                </div>

                {{-- Masjid --}}
                <div class="group relative rounded-[2rem] overflow-hidden aspect-[4/3] shadow-xl">
                    <img src="https://images.unsplash.com/photo-1564769662533-4f00a87b4056?auto=format&fit=crop&q=80&w=800"
                        alt="Masjid"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 brightness-75">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/30 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <div class="w-10 h-10 bg-fuchsia-600 rounded-xl flex items-center justify-center mb-3">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m8.66-13l-.87.5M4.21 17.5l-.87.5M20.66 17.5l-.87-.5M4.21 6.5l-.87-.5M21 12h1M2 12h1"/>
                            </svg>
                        </div>
                        <h4 class="text-white font-black text-2xl tracking-tight">Masjid Pondok</h4>
                        <p class="text-gray-300 text-sm font-medium mt-1">Pusat ibadah & pembinaan spiritual</p>
                    </div>
                </div>

                {{-- Laboratorium --}}
                <div class="group relative rounded-[2rem] overflow-hidden aspect-[4/3] shadow-xl">
                    <img src="https://images.unsplash.com/photo-1582719471384-894fbb16e074?auto=format&fit=crop&q=80&w=800"
                        alt="Laboratorium Sains"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 brightness-75">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/30 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center mb-3">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                            </svg>
                        </div>
                        <h4 class="text-white font-black text-2xl tracking-tight">Laboratorium Sains</h4>
                        <p class="text-gray-300 text-sm font-medium mt-1">Ruang praktikum lengkap & modern</p>
                    </div>
                </div>
            </div>

            {{-- Grid Fasilitas Sekunder --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

                {{-- Perpustakaan --}}
                <div class="group relative rounded-[2rem] overflow-hidden aspect-[16/7] shadow-xl">
                    <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?auto=format&fit=crop&q=80&w=1200"
                        alt="Perpustakaan"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 brightness-75">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <div class="w-10 h-10 bg-purple-600 rounded-xl flex items-center justify-center mb-3">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <h4 class="text-white font-black text-2xl tracking-tight">Perpustakaan</h4>
                        <p class="text-gray-300 text-sm font-medium mt-1">Koleksi ribuan buku & referensi digital</p>
                    </div>
                </div>

                {{-- Lapangan Olahraga --}}
                <div class="group relative rounded-[2rem] overflow-hidden aspect-[16/7] shadow-xl">
                    <img src="https://images.unsplash.com/photo-1546519638-68e109498ffc?auto=format&fit=crop&q=80&w=1200"
                        alt="Lapangan Olahraga"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 brightness-75">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <div class="w-10 h-10 bg-fuchsia-600 rounded-xl flex items-center justify-center mb-3">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/>
                            </svg>
                        </div>
                        <h4 class="text-white font-black text-2xl tracking-tight">Lapangan Olahraga</h4>
                        <p class="text-gray-300 text-sm font-medium mt-1">Area olahraga & kegiatan ekstrakurikuler</p>
                    </div>
                </div>
            </div>

            {{-- List Fasilitas Tambahan --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach ([
                    ['icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'label' => 'Lab Komputer', 'color' => 'purple'],
                    ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'label' => 'Klinik Kesehatan', 'color' => 'fuchsia'],
                    ['icon' => 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z', 'label' => 'Kantin Sehat', 'color' => 'indigo'],
                    ['icon' => 'M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z', 'label' => 'Aula Serbaguna', 'color' => 'purple'],
                ] as $item)
                <div class="flex items-center gap-4 p-5 bg-white rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                    <div class="w-10 h-10 bg-{{ $item['color'] }}-100 text-{{ $item['color'] }}-600 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"/>
                        </svg>
                    </div>
                    <span class="font-black text-gray-800 text-sm">{{ $item['label'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const revealItems = document.querySelectorAll('.mission-reveal');

            if (!('IntersectionObserver' in window)) {
                revealItems.forEach(item => item.classList.add('is-visible'));
                return;
            }

            const missionObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });

            revealItems.forEach(item => missionObserver.observe(item));
        });
    </script>

@endsection
