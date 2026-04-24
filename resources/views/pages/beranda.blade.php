@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="relative py-40 md:py-52 px-4 overflow-hidden bg-purple-900">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/bangunan.jpeg') }}" class="w-full h-full object-cover object-center brightness-50"
                alt="Gedung Aisyah Samawa">
            <div class="absolute inset-0 bg-gradient-to-b from-purple-900/80 via-purple-800/40 to-indigo-900/90"></div>
        </div>

        <div
            class="absolute top-0 left-0 w-96 h-96 bg-fuchsia-500/20 rounded-full blur-[120px] -translate-x-1/2 -translate-y-1/2 animate-pulse z-10">
        </div>

        <div class="max-w-7xl mx-auto text-center relative z-20">
            <span
                class="inline-block px-4 py-1.5 mb-6 text-xs font-black tracking-[0.2em] text-fuchsia-300 uppercase bg-fuchsia-500/10 backdrop-blur-md rounded-full border border-fuchsia-500/20">
                Pondok Pesantren Modern
            </span>

            <h1 class="text-5xl md:text-8xl font-black text-white leading-tight mb-8 tracking-tighter drop-shadow-2xl">
                Mencetak Generasi <br>
                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-300 via-purple-100 to-indigo-200 uppercase">
                    Aisyah Samawa
                </span>
            </h1>

            <p
                class="mt-6 text-lg md:text-2xl text-purple-100 max-w-3xl mx-auto font-medium leading-relaxed drop-shadow-md">
                Sinergi <span class="text-fuchsia-300 font-bold underline decoration-fuchsia-500/50">Spiritualitas</span>
                dan <span class="text-indigo-300 font-bold underline decoration-indigo-500/50">Sains</span> untuk melahirkan
                muslimah pemimpin masa depan.
            </p>

            <div class="mt-12 flex flex-wrap justify-center gap-6">
                <a href="{{ route('tentang.profil') }}"
                    class="bg-white text-purple-900 px-10 py-4 rounded-2xl font-black shadow-2xl hover:bg-purple-50 transition-all transform hover:-translate-y-1 text-lg">
                    PROFIL PONDOK
                </a>
                <a href="#ppdb"
                    class="bg-fuchsia-600/30 backdrop-blur-lg text-white border-2 border-fuchsia-500/50 px-10 py-4 rounded-2xl font-black hover:bg-fuchsia-600 transition-all shadow-lg hover:shadow-fuchsia-500/40 text-lg">
                    DAFTAR SEKARANG
                </a>
            </div>
        </div>
    </section>

    <section class="py-28 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-20 items-center">
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
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=800"
                    alt="Kepala Sekolah"
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
                <div
                    class="p-10 rounded-[2.5rem] bg-gray-900 text-white flex flex-col justify-center relative overflow-hidden group shadow-2xl">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-purple-500/20 blur-3xl group-hover:bg-purple-500/40 transition-colors">
                    </div>
                    <h3 class="text-5xl font-black mb-6 tracking-tighter text-fuchsia-400 italic">MISI</h3>
                    <p class="text-gray-400 text-lg leading-relaxed font-medium">Komitmen konkret kami untuk mencetak
                        muslimah berkualitas dunia akhirat.</p>
                </div>

                <div
                    class="p-10 rounded-[2.5rem] bg-white border border-slate-200 hover:border-purple-300 transition-all duration-300 shadow-sm hover:shadow-xl group">
                    <div
                        class="w-14 h-14 bg-gradient-to-br from-purple-600 to-fuchsia-600 text-white rounded-2xl flex items-center justify-center font-black text-2xl mb-8 shadow-lg shadow-purple-200 group-hover:scale-110 transition-transform">
                        1</div>
                    <p class="text-gray-800 text-lg font-bold leading-relaxed">
                        Menyelenggarakan sistem pendidikan berkualitas dalam frame islami sesuai manhaj
                        <span class="text-purple-700 font-black underline decoration-purple-200">Ahlus Sunnah Wal
                            Jamah.</span>
                    </p>
                </div>

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
                <a href="{{ route('kesiswaan.berita') }}"
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
