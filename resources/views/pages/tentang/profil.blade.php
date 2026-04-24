@extends('layouts.app')

@section('title', 'Profil Pondok')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-32 md:py-48 px-4 overflow-hidden bg-purple-900">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/bangunan.jpeg') }}" class="w-full h-full object-cover object-center brightness-50"
                alt="Profil Aisyah Samawa">
            <div class="absolute inset-0 bg-gradient-to-b from-purple-900/80 via-purple-800/40 to-indigo-900/90"></div>
        </div>

        <div class="max-w-7xl mx-auto text-center relative z-20">
            <span
                class="inline-block px-4 py-1.5 mb-6 text-xs font-black tracking-[0.2em] text-fuchsia-300 uppercase bg-fuchsia-500/10 backdrop-blur-md rounded-full border border-fuchsia-500/20">
                Tentang Kami
            </span>
            <h1 class="text-5xl md:text-8xl font-black text-white leading-tight mb-8 tracking-tighter drop-shadow-2xl">
                Profil <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-300 to-indigo-200">PONDOK</span>
            </h1>
            <p class="mt-6 text-lg md:text-2xl text-purple-100 max-w-3xl mx-auto font-medium leading-relaxed drop-shadow-md">
                Mengenal lebih dekat dedikasi dan komitmen kami dalam membangun generasi muslimah unggul.
            </p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-28 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-20 items-center">
            <div class="relative group">
                <div class="absolute inset-0 bg-gradient-to-tr from-purple-600 to-fuchsia-600 rounded-[2rem] -rotate-3 scale-105 opacity-20 transition-transform duration-500"></div>
                <img src="https://images.unsplash.com/photo-1541829070764-84a7d30dee93?auto=format&fit=crop&q=80&w=800"
                    alt="Profil Pondok"
                    class="relative rounded-[2rem] shadow-2xl w-full object-cover aspect-[4/3]">
            </div>
            
            <div>
                <h2 class="text-fuchsia-600 font-black text-xs uppercase tracking-[0.3em] mb-4">Profil Singkat</h2>
                <h3 class="text-4xl font-black text-gray-900 mb-8 leading-tight">Membangun Masa Depan <br><span class="text-purple-800 tracking-tighter">Dengan Nilai Islami</span></h3>
                <div class="space-y-6 text-gray-600 text-lg leading-relaxed font-medium">
                    <p>Pondok Pesantren Modern Aisyah Samawa adalah lembaga pendidikan Islam yang berkomitmen mencetak generasi muslimah unggul. Berlokasi di jantung Sumbawa Besar, kami memadukan tradisi keislaman yang kuat dengan kurikulum modern yang dinamis.</p>
                    <p>Kami percaya bahwa setiap santriwati memiliki potensi besar untuk menjadi pemimpin, ilmuwan, dan pendidik di masa depan dengan fondasi akhlak yang kokoh.</p>
                </div>

                <div class="mt-12 grid grid-cols-2 gap-8">
                    <div class="p-6 rounded-2xl bg-purple-50 border border-purple-100">
                        <p class="text-3xl font-black text-purple-700 mb-1">Modern</p>
                        <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Metode Belajar</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-fuchsia-50 border border-fuchsia-100">
                        <p class="text-3xl font-black text-fuchsia-600 mb-1">Islami</p>
                        <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Lingkungan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us (from previous about page) -->
    <section class="py-28 bg-gray-900 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-fuchsia-400 font-black tracking-[0.3em] text-sm mb-6 uppercase">Keunggulan Kami</h2>
                    <h3 class="text-5xl font-black mb-8 leading-tight tracking-tighter">Ekosistem Belajar <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-fuchsia-300 italic">Terbaik Untuk Muslimah</span></h3>
                    <p class="text-gray-400 text-xl font-medium leading-relaxed mb-10">Kami menyediakan fasilitas lengkap dan pendampingan intensif untuk memastikan setiap santriwati berkembang optimal.</p>
                </div>

                <div class="grid gap-6">
                    <div class="p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-sm hover:bg-white/10 transition-all">
                        <h4 class="text-xl font-black text-fuchsia-400 mb-3">Kurikulum Integratif</h4>
                        <p class="text-gray-400 font-medium">Penggabungan Tahfidz Al-Qur'an dengan Kurikulum Nasional & Sains modern.</p>
                    </div>
                    <div class="p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-sm hover:bg-white/10 transition-all">
                        <h4 class="text-xl font-black text-purple-400 mb-3">Lingkungan Aman</h4>
                        <p class="text-gray-400 font-medium">Fasilitas asrama yang nyaman dengan pengawasan 24 jam oleh ustadzah berpengalaman.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
