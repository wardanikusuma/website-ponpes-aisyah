@extends('layouts.app')

@section('title', 'Lainnya - Informasi & Kontak')

@section('content')
    {{-- HERO SECTION --}}
    <section class="relative min-h-screen flex items-center pt-20 bg-purple-900">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/bangunan.jpeg') }}" class="w-full h-full object-cover object-center brightness-50" alt="Gedung Aisyah Samawa">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-900/60 to-transparent"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-20 w-full">
            <div class="max-w-4xl mx-auto text-center">
                <span class="inline-block px-4 py-1.5 mb-6 text-xs font-black tracking-[0.2em] text-fuchsia-300 uppercase bg-fuchsia-500/10 backdrop-blur-md rounded-full border border-fuchsia-500/20">
                    Layanan Informasi
                </span>

                <h1 class="text-5xl md:text-8xl font-black text-white leading-tight mb-6 tracking-tighter drop-shadow-2xl">
                    HUBUNGI
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-300 via-purple-100 to-indigo-200 uppercase">
                        Kami
                    </span>
                </h1>

                <p class="text-lg md:text-2xl text-purple-100 font-medium leading-relaxed drop-shadow-md mb-4">
                    Akses layanan informasi pondok pesantren melalui kanal di bawah ini.
                </p>
            </div>
        </div>
    </section>

    <div class="max-w-5xl mx-auto px-6 py-20">

        {{-- DAFTAR PPDB (CTA BOX) --}}
        <div class="mb-24">
            <a href="#"
                class="group block relative p-10 bg-white border-2 border-dashed border-purple-200 rounded-[3rem] text-center hover:border-purple-500 transition-all duration-500 overflow-hidden shadow-sm hover:shadow-xl">
                <div class="absolute inset-0 bg-purple-50 translate-y-full group-hover:translate-y-0 transition-transform duration-500 opacity-50"></div>
                <div class="relative z-10">
                    <h2 class="text-2xl md:text-3xl font-black text-purple-900 uppercase tracking-tighter">Ingin Daftar PPDB?</h2>
                    <p class="text-fuchsia-600 font-bold mt-2 uppercase tracking-widest text-sm italic group-hover:scale-110 transition-transform">
                        Klik Di Sini Untuk Memulai →
                    </p>
                </div>
            </a>
        </div>

        {{-- LAYANAN INFORMASI --}}
        <div id="layanan" class="mb-32 scroll-mt-24">
            <div class="text-center mb-16">
                <h3 class="text-xs font-black text-slate-400 uppercase tracking-[0.5em] mb-4">Layanan Informasi</h3>
                <div class="w-12 h-1 bg-purple-200 mx-auto rounded-full"></div>
            </div>

            <div class="space-y-8">
                @php
                    $layanan = [
                        ['t' => 'WhatsApp Center', 'd' => 'Hubungi admin untuk tanya jawab cepat.', 'i' => '💬', 'c' => 'from-green-400 to-emerald-600'],
                        ['t' => 'Email Akademik', 'd' => 'Pertanyaan seputar kurikulum dan pendaftaran.', 'i' => '📧', 'c' => 'from-blue-400 to-indigo-600'],
                        ['t' => 'Instagram Resmi', 'd' => 'Update kegiatan harian santriwati.', 'i' => '📸', 'c' => 'from-fuchsia-500 to-purple-600'],
                        ['t' => 'Facebook Resmi', 'd' => 'Komunitas dan informasi berita terbaru.', 'i' => '👥', 'c' => 'from-blue-600 to-blue-800'],
                        ['t' => 'Saluran YouTube', 'd' => 'Dokumentasi video acara besar pondok.', 'i' => '🎥', 'c' => 'from-red-500 to-orange-600'],
                    ];
                @endphp

                @foreach ($layanan as $l)
                    <div class="flex flex-col md:flex-row items-center gap-8 p-8 rounded-[2.5rem] bg-white border border-slate-100 hover:shadow-2xl hover:border-purple-200 transition-all duration-300 group">
                        <div class="w-24 h-24 shrink-0 bg-gradient-to-br {{ $l['c'] }} rounded-full flex items-center justify-center text-4xl shadow-lg group-hover:scale-110 transition-transform duration-500">
                            {{ $l['i'] }}
                        </div>
                        <div class="flex-1 text-center md:text-left">
                            <h4 class="text-2xl font-black text-slate-800 uppercase tracking-tight">{{ $l['t'] }}</h4>
                            <p class="text-slate-500 mt-2 font-medium">{{ $l['d'] }}</p>
                        </div>
                        <div class="shrink-0">
                            <button class="px-8 py-3 bg-slate-50 text-slate-400 font-black text-xs rounded-full uppercase tracking-widest border border-slate-200 group-hover:bg-purple-600 group-hover:text-white group-hover:border-purple-600 transition-all">Hubungi</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- KEMITRAAN / PARTNERSHIP --}}
        <div id="kemitraan" class="mt-32 scroll-mt-24">
            <div class="text-center mb-12">
                <h3 class="text-xs font-black text-slate-400 uppercase tracking-[0.5em] mb-4">Kemitraan Strategis</h3>
                <div class="w-12 h-1 bg-purple-200 mx-auto rounded-full"></div>
                <p class="text-slate-500 mt-6 max-w-lg mx-auto text-sm font-medium">
                    Bekerjasama dengan institusi terpercaya untuk meningkatkan kualitas pendidikan dan pelayanan.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
                @php
                    $mitra = [
                        ['nama' => 'Kemenag RI', 'logo' => 'kemenag.png'],
                        ['nama' => 'Bank Syariah', 'logo' => 'bsi.png'],
                        ['nama' => 'Yayasan Pendidikan', 'logo' => 'yayasan.png'],
                        ['nama' => 'Lembaga Zakat', 'logo' => 'lazis.png'],
                    ];
                @endphp

                @foreach ($mitra as $m)
                    <div class="group p-8 bg-slate-50/50 rounded-[2rem] border border-transparent hover:border-purple-100 hover:bg-white transition-all duration-500 flex items-center justify-center">
                        <img src="{{ asset('assets/img/mitra/' . $m['logo']) }}"
                             alt="{{ $m['nama'] }}"
                             class="h-12 md:h-16 w-auto object-contain filter grayscale opacity-50 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500 transform group-hover:scale-110">
                    </div>
                @endforeach
            </div>

            {{-- FOOTER KECIL UNTUK AJAKAN KERJASAMA --}}
            <div class="mt-12 text-center">
                <p class="text-slate-400 text-xs italic">
                    Ingin menjalin kerjasama dengan Pondok Pesantren?
                    <a href="mailto:kemitraan@email.com" class="text-purple-600 font-bold hover:underline ml-1">Ajukan Proposal →</a>
                </p>
            </div>
        </div>

    </div>
@endsection