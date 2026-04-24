@extends('layouts.app')

@section('title', 'Akreditasi')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-32 md:py-48 px-4 overflow-hidden bg-purple-900">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/bangunan.jpeg') }}" class="w-full h-full object-cover object-center brightness-50"
                alt="Akreditasi Aisyah Samawa">
            <div class="absolute inset-0 bg-gradient-to-b from-purple-900/80 via-purple-800/40 to-indigo-900/90"></div>
        </div>

        <div class="max-w-7xl mx-auto text-center relative z-20">
            <span
                class="inline-block px-4 py-1.5 mb-6 text-xs font-black tracking-[0.2em] text-fuchsia-300 uppercase bg-fuchsia-500/10 backdrop-blur-md rounded-full border border-fuchsia-500/20">
                Kualitas Terjamin
            </span>
            <h1 class="text-5xl md:text-8xl font-black text-white leading-tight mb-8 tracking-tighter drop-shadow-2xl">
                Legalitas & <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-300 to-indigo-200">AKREDITASI</span>
            </h1>
            <p class="mt-6 text-lg md:text-2xl text-purple-100 max-w-3xl mx-auto font-medium leading-relaxed drop-shadow-md">
                Bukti komitmen kami dalam menyelenggarakan pendidikan standar nasional yang berkualitas.
            </p>
        </div>
    </section>

    <!-- Accreditation Content -->
    <section class="py-28 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="p-10 rounded-[2.5rem] bg-slate-50 border border-slate-200 hover:border-purple-300 transition-all group">
                    <div class="w-20 h-20 bg-white rounded-3xl shadow-lg flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
                        <span class="text-4xl font-black text-purple-700">A</span>
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Akreditasi Sekolah</h3>
                    <p class="text-gray-600 font-medium leading-relaxed">Terakreditasi "A" (Unggul) oleh Badan Akreditasi Nasional Sekolah/Madrasah (BAN-S/M).</p>
                    <div class="mt-6 pt-6 border-t border-slate-200">
                        <p class="text-xs font-black text-gray-400 uppercase tracking-widest">Berlaku Hingga 2028</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="p-10 rounded-[2.5rem] bg-purple-700 text-white shadow-2xl transform md:-translate-y-8 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 blur-3xl group-hover:scale-150 transition-transform duration-700"></div>
                    <div class="w-20 h-20 bg-white/20 backdrop-blur-md rounded-3xl border border-white/30 flex items-center justify-center mb-8">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black mb-4">Izin Operasional</h3>
                    <p class="text-purple-100 font-medium leading-relaxed">Memiliki izin resmi dari Kementerian Agama RI untuk menyelenggarakan pendidikan Kepesantrenan.</p>
                    <div class="mt-6 pt-6 border-t border-white/10">
                        <p class="text-xs font-black text-purple-300 uppercase tracking-widest">SK No: 123/KEMENAG/2017</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="p-10 rounded-[2.5rem] bg-slate-50 border border-slate-200 hover:border-fuchsia-300 transition-all group">
                    <div class="w-20 h-20 bg-white rounded-3xl shadow-lg flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
                        <svg class="w-10 h-10 text-fuchsia-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Sertifikasi Halal</h3>
                    <p class="text-gray-600 font-medium leading-relaxed">Unit kantin dan asrama telah tersertifikasi standar kebersihan dan kehalalan dari MUI.</p>
                    <div class="mt-6 pt-6 border-t border-slate-200">
                        <p class="text-xs font-black text-gray-400 uppercase tracking-widest">Quality Assurance</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
