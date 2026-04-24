@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-32 md:py-48 px-4 overflow-hidden bg-purple-900">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/bangunan.jpeg') }}" class="w-full h-full object-cover object-center brightness-50"
                alt="Tentang Aisyah Samawa">
            <div class="absolute inset-0 bg-gradient-to-b from-purple-900/80 via-purple-800/40 to-indigo-900/90"></div>
        </div>

        <div class="max-w-7xl mx-auto text-center relative z-20">
            <span
                class="inline-block px-4 py-1.5 mb-6 text-xs font-black tracking-[0.2em] text-fuchsia-300 uppercase bg-fuchsia-500/10 backdrop-blur-md rounded-full border border-fuchsia-500/20">
                Profil Lembaga
            </span>
            <h1 class="text-5xl md:text-8xl font-black text-white leading-tight mb-8 tracking-tighter drop-shadow-2xl uppercase">
                Tentang <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-300 to-indigo-200">KAMI</span>
            </h1>
            <p class="mt-6 text-lg md:text-2xl text-purple-100 max-w-3xl mx-auto font-medium leading-relaxed drop-shadow-md">
                Mengenal lebih dekat Pondok Pesantren Modern Aisyah Samawa, pusat keunggulan pendidikan muslimah di Sumbawa.
            </p>
        </div>
    </section>

    <!-- Profile Section -->
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

    <!-- Visi Section -->
    <section id="visi" class="py-24 bg-slate-50 border-y border-slate-200 scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-fuchsia-600 font-black tracking-[0.4em] text-sm mb-6 uppercase">Visi Kami</h2>
            <div class="p-12 md:p-20 rounded-[3.5rem] bg-gray-900 text-white relative overflow-hidden group shadow-2xl">
                <div class="absolute top-0 right-0 w-64 h-64 bg-purple-500/10 blur-3xl group-hover:bg-purple-500/20 transition-colors"></div>
                <p class="text-2xl md:text-4xl font-bold leading-relaxed italic text-gray-100 tracking-tight">
                    "Menjadi lembaga pendidikan muslimah terkemuka yang melahirkan generasi berakhlak mulia, cerdas intelektual, dan mandiri secara ekonomi."
                </p>
            </div>
        </div>
    </section>

    <!-- Misi Section -->
    <section id="misi" class="py-24 bg-white scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-center text-purple-700 font-black tracking-[0.4em] text-sm mb-12 uppercase">Misi Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">
                <!-- Card 1 -->
                <div class="p-8 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all">
                    <div class="w-12 h-12 bg-purple-100 text-purple-700 rounded-xl flex items-center justify-center font-black mb-6">01</div>
                    <p class="text-gray-700 font-bold leading-snug">Menyelenggarakan sistem pendidikan berkualitas dalam frame islami.</p>
                </div>
                <!-- Card 2 -->
                <div class="p-8 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all">
                    <div class="w-12 h-12 bg-fuchsia-100 text-fuchsia-600 rounded-xl flex items-center justify-center font-black mb-6">02</div>
                    <p class="text-gray-700 font-bold leading-snug">Maksimalisasi Tahfidz Al-Qur'an & Sains sebagai Brand Pesantren.</p>
                </div>
                <!-- Card 3 -->
                <div class="p-8 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all">
                    <div class="w-12 h-12 bg-indigo-100 text-indigo-700 rounded-xl flex items-center justify-center font-black mb-6">03</div>
                    <p class="text-gray-700 font-bold leading-snug">Membentuk karakter muslimah yang berintegritas dan disiplin.</p>
                </div>
                <!-- Card 4 -->
                <div class="p-8 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all">
                    <div class="w-12 h-12 bg-purple-100 text-purple-700 rounded-xl flex items-center justify-center font-black mb-6">04</div>
                    <p class="text-gray-700 font-bold leading-snug">Mengembangkan potensi kewirausahaan dan kemandirian ekonomi.</p>
                </div>
                <!-- Card 5 -->
                <div class="p-8 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all">
                    <div class="w-12 h-12 bg-fuchsia-100 text-fuchsia-600 rounded-xl flex items-center justify-center font-black mb-6">05</div>
                    <p class="text-gray-700 font-bold leading-snug">Mewujudkan lingkungan pendidikan yang aman dan inklusif.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sejarah Section -->
    <section id="sejarah" class="py-28 bg-slate-50 border-y border-slate-200 overflow-hidden scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-20">
                <h2 class="text-fuchsia-600 font-black tracking-[0.4em] text-sm mb-4 uppercase">Sejarah</h2>
                <h3 class="text-4xl md:text-5xl font-black text-gray-900 tracking-tighter italic">Jejak Langkah <span class="text-purple-700">Kami</span></h3>
            </div>

            <div class="space-y-32">
                <!-- Row 1 -->
                <div class="flex flex-col md:flex-row items-center gap-16">
                    <div class="flex-1">
                        <div class="relative group">
                            <div class="absolute inset-0 bg-purple-600 rounded-[3rem] rotate-3 opacity-10 group-hover:rotate-6 transition-transform"></div>
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=800"
                                class="relative rounded-[3rem] shadow-xl w-full aspect-video object-cover" alt="Sejarah 1">
                        </div>
                    </div>
                    <div class="flex-1">
                        <span class="text-6xl font-black text-purple-100 block mb-4">2015</span>
                        <h4 class="text-3xl font-black text-gray-900 mb-6">Peletakan Batu Pertama</h4>
                        <p class="text-gray-600 text-lg leading-relaxed font-medium">Berawal dari niat tulus para pendiri untuk menyediakan pendidikan khusus muslimah yang berkualitas di Sumbawa. Pembangunan gedung asrama pertama dimulai di atas tanah wakaf yang penuh berkah.</p>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="flex flex-col md:flex-row-reverse items-center gap-16">
                    <div class="flex-1">
                        <div class="relative group">
                            <div class="absolute inset-0 bg-fuchsia-600 rounded-[3rem] -rotate-3 opacity-10 group-hover:-rotate-6 transition-transform"></div>
                            <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?auto=format&fit=crop&q=80&w=800"
                                class="relative rounded-[3rem] shadow-xl w-full aspect-video object-cover" alt="Sejarah 2">
                        </div>
                    </div>
                    <div class="flex-1 text-right">
                        <span class="text-6xl font-black text-fuchsia-100 block mb-4">2017</span>
                        <h4 class="text-3xl font-black text-gray-900 mb-6">Operasional Perdana</h4>
                        <p class="text-gray-600 text-lg leading-relaxed font-medium">Resmi beroperasi dengan menerima 50 santriwati pertama yang menjadi pionir dalam sejarah Aisyah Samawa. Kurikulum integratif Tahfidz dan Sains mulai diterapkan secara intensif.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Struktur Organisasi Section -->
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

    <!-- Akreditasi Section -->
    <section id="akreditasi" class="pt-28 pb-48 bg-gray-900 text-white relative overflow-hidden scroll-mt-24">
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

@endsection
