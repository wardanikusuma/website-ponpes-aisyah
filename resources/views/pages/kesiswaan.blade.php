@extends('layouts.app')

@section('title', 'Kesiswaan')

@section('content')
    {{-- HERO SECTION: SAMA PERSIS DENGAN BERANDA --}}
    <section class="relative min-h-screen flex items-center pt-20 bg-purple-900">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/bangunan.jpeg') }}" class="w-full h-full object-cover object-center brightness-50"
                alt="Kegiatan Kesiswaan">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-900/60 to-transparent"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-20 w-full">
            <div class="text-center">
                <span class="inline-block px-4 py-1.5 mb-6 text-xs font-black tracking-[0.2em] text-fuchsia-300 uppercase bg-fuchsia-500/10 backdrop-blur-md rounded-full border border-fuchsia-500/20">
                    Layanan Kesiswaan
                </span>

                <h1 class="text-5xl md:text-8xl font-black text-white leading-tight mb-6 tracking-tighter drop-shadow-2xl">
                    Life at <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-300 via-purple-100 to-indigo-200 uppercase">
                        Aisyah Samawa
                    </span>
                </h1>

                <p class="text-lg md:text-2xl text-purple-100 font-medium leading-relaxed drop-shadow-md mb-4">
                    Membentuk karakter melalui kreativitas dan eksplorasi prestasi.
                </p>
            </div>
        </div>
    </section>

    {{-- SECTION: PRESTASI --}}
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
                @forelse ($prestasi as $p)
                    <div
                        class="group relative bg-white rounded-[3rem] shadow-[0_20px_50px_rgba(0,0,0,0.05)] transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_40px_80px_rgba(124,58,237,0.1)] border border-slate-100 overflow-hidden">
                        <div class="p-12 h-full flex flex-col items-center relative z-10">
                            <div
                                class="w-24 h-24 bg-gradient-to-br from-amber-400 to-orange-500 rounded-[2rem] flex items-center justify-center text-5xl shadow-2xl mb-8 transform group-hover:rotate-6 transition-transform duration-500 overflow-hidden">
                                @if($p->foto)
                                    <img src="{{ asset('storage/' . $p->foto) }}" class="w-full h-full object-cover">
                                @else
                                    🏆
                                @endif
                            </div>
                            <span class="text-fuchsia-600 font-black tracking-[0.2em] text-xs mb-3 uppercase">{{ $p->tahun }}</span>
                            <h4 class="text-3xl font-black text-slate-800 uppercase tracking-tighter text-center leading-tight">
                                {{ $p->nama_prestasi }}</h4>
                            <p class="mt-4 text-slate-500 text-center text-sm font-medium">{{ $p->deskripsi ?? 'Membanggakan umat melalui dedikasi dan hafalan yang mutqin.' }}</p>
                        </div>
                        <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-slate-50 rounded-full group-hover:bg-purple-50 transition-colors duration-500"></div>
                    </div>
                @empty
                    <div class="col-span-2 text-center py-10 text-slate-400 italic">Belum ada data prestasi.</div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- SECTION: EKSTRAKURIKULER --}}
    <section id="ekstrakurikuler" class="py-28 bg-white scroll-mt-24">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-20">
                <h2 class="text-fuchsia-600 font-black tracking-[0.4em] text-sm mb-4 uppercase">Kegiatan Santri</h2>
                <h3 class="text-4xl md:text-5xl font-black text-gray-900 tracking-tighter">Minat &amp; <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-700 to-fuchsia-600">Bakat</span></h3>
                <div class="w-20 h-1.5 bg-gradient-to-r from-purple-600 to-fuchsia-500 mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @forelse ($eskul as $e)
                    <div
                        class="p-8 rounded-[2rem] bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-xl hover:border-purple-200 transition-all duration-300 text-center group cursor-default">
                        <div class="w-20 h-20 mx-auto bg-white rounded-2xl flex items-center justify-center text-4xl mb-6 grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-500 overflow-hidden border border-slate-100">
                            @if($e->gambar)
                                <img src="{{ asset('storage/' . $e->gambar) }}" class="w-full h-full object-cover">
                            @else
                                ✨
                            @endif
                        </div>
                        <h4 class="font-bold text-slate-700 uppercase text-[11px] tracking-widest group-hover:text-purple-700 transition-colors">
                            {{ $e->nama_eskul }}</h4>
                        <p class="font-bold text-slate-700 uppercase text-[11px] tracking-widest group-hover:text-purple-700 transition-colors">
                            {{ $e->deskripsi }}</p>
                    </div>
                @empty
                    <div class="col-span-4 text-center py-10 text-slate-400 italic">Belum ada data ekstrakurikuler.</div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- SECTION: BERITA --}}
    <section id="berita" class="py-28 bg-white scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16">
                <div>
                    <h2 class="text-4xl font-black text-gray-900 tracking-tight italic">Warta <span class="text-fuchsia-600">Pondok</span></h2>
                    <p class="text-gray-500 mt-3 text-lg font-medium">Kegiatan, prestasi, dan inspirasi harian santriwati.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                @forelse ($berita as $b)
                    <div class="group cursor-pointer">
                        <div class="relative overflow-hidden rounded-[2.5rem] mb-6 shadow-2xl h-80">
                            @if($b->foto)
                                <img src="{{ asset('storage/' . $b->foto) }}"
                                    class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 brightness-75 group-hover:brightness-100"
                                    alt="{{ $b->judul }}">
                            @else
                                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=800"
                                    class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 brightness-75 group-hover:brightness-100"
                                    alt="Berita">
                            @endif
                            <div class="absolute bottom-6 left-6">
                                <span class="bg-purple-600/80 backdrop-blur-md text-white px-5 py-2 rounded-full text-xs font-black uppercase tracking-[0.2em]">
                                    {{ $b->kategori ?? 'Update' }}
                                </span>
                            </div>
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 group-hover:text-fuchsia-600 transition duration-300 leading-snug">
                            {{ $b->judul }}
                        </h3>
                        <p class="text-gray-500 mt-3 font-medium italic">"{{ Str::limit($b->narasi, 100) }}"</p>
                    </div>
                @empty
                    <div class="col-span-2 text-center py-10 text-slate-400 italic">Belum ada warta pondok.</div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- SECTION: PPDB --}}
    <section id="ppdb" class="py-24 px-4">
        <div
            class="max-w-6xl mx-auto bg-gradient-to-br from-indigo-900 via-purple-800 to-fuchsia-700 rounded-[3.5rem] p-12 md:p-24 text-center text-white shadow-[0_35px_60px_-15px_rgba(124,58,237,0.5)] relative overflow-hidden">
            <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10"></div>

            <div class="relative z-10">
                <h2 class="text-5xl md:text-7xl font-black mb-8 tracking-tighter">Mulai Langkahmu</h2>
                <p class="text-purple-100 mb-12 text-lg md:text-2xl max-w-2xl mx-auto font-medium opacity-90 leading-relaxed">
                    Bergabung bersama kami mencetak generasi muslimah yang kokoh dalam iman dan unggul dalam prestasi. Pendaftaran TA 2026/2027 telah dibuka.
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