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
    <section id="visi" class="py-24 bg-slate-50 border-y border-slate-200 scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-fuchsia-600 font-black tracking-[0.4em] text-sm mb-6 uppercase">Visi Kami</h2>
            <div class="p-12 md:p-20 rounded-[3.5rem] bg-gray-900 text-white relative overflow-hidden group shadow-2xl mb-20">
                <div class="absolute top-0 right-0 w-64 h-64 bg-purple-500/10 blur-3xl group-hover:bg-purple-500/20 transition-colors"></div>
                <p class="text-2xl md:text-4xl font-bold leading-relaxed italic text-gray-100 tracking-tight">
                    "Menjadi lembaga pendidikan muslimah terkemuka yang melahirkan generasi berakhlak mulia, cerdas intelektual, dan mandiri secara ekonomi."
                </p>
            </div>

            <h2 class="text-purple-700 font-black tracking-[0.4em] text-sm mb-12 uppercase">Misi Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">
                <div class="p-8 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all">
                    <div class="w-12 h-12 bg-purple-100 text-purple-700 rounded-xl flex items-center justify-center font-black mb-6">01</div>
                    <p class="text-gray-700 font-bold leading-snug text-left">Menyelenggarakan sistem pendidikan berkualitas dalam frame islami.</p>
                </div>
                <div class="p-8 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all">
                    <div class="w-12 h-12 bg-fuchsia-100 text-fuchsia-600 rounded-xl flex items-center justify-center font-black mb-6">02</div>
                    <p class="text-gray-700 font-bold leading-snug text-left">Maksimalisasi Tahfidz Al-Qur'an & Sains sebagai Brand Pesantren.</p>
                </div>
                <div class="p-8 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all">
                    <div class="w-12 h-12 bg-indigo-100 text-indigo-700 rounded-xl flex items-center justify-center font-black mb-6">03</div>
                    <p class="text-gray-700 font-bold leading-snug text-left">Membentuk karakter muslimah yang berintegritas dan disiplin.</p>
                </div>
                <div class="p-8 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all">
                    <div class="w-12 h-12 bg-purple-100 text-purple-700 rounded-xl flex items-center justify-center font-black mb-6">04</div>
                    <p class="text-gray-700 font-bold leading-snug text-left">Mengembangkan potensi kewirausahaan dan kemandirian ekonomi.</p>
                </div>
                <div class="p-8 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all">
                    <div class="w-12 h-12 bg-fuchsia-100 text-fuchsia-600 rounded-xl flex items-center justify-center font-black mb-6">05</div>
                    <p class="text-gray-700 font-bold leading-snug text-left">Mewujudkan lingkungan pendidikan yang aman dan inklusif.</p>
                </div>
            </div>
        </div>
    </section>

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

@endsection