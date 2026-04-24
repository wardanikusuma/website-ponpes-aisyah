@extends('layouts.app')

@section('title', 'Visi & Misi')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-32 md:py-48 px-4 overflow-hidden bg-purple-900">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/bangunan.jpeg') }}" class="w-full h-full object-cover object-center brightness-50"
                alt="Visi Misi Aisyah Samawa">
            <div class="absolute inset-0 bg-gradient-to-b from-purple-900/80 via-purple-800/40 to-indigo-900/90"></div>
        </div>

        <div class="max-w-7xl mx-auto text-center relative z-20">
            <span
                class="inline-block px-4 py-1.5 mb-6 text-xs font-black tracking-[0.2em] text-fuchsia-300 uppercase bg-fuchsia-500/10 backdrop-blur-md rounded-full border border-fuchsia-500/20">
                Arah & Tujuan
            </span>
            <h1 class="text-5xl md:text-8xl font-black text-white leading-tight mb-8 tracking-tighter drop-shadow-2xl">
                Visi & <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-300 to-indigo-200">MISI</span>
            </h1>
            <p class="mt-6 text-lg md:text-2xl text-purple-100 max-w-3xl mx-auto font-medium leading-relaxed drop-shadow-md">
                Landasan spiritual dan intelektual kami dalam mendidik generasi muslimah masa depan.
            </p>
        </div>
    </section>

    <!-- Visi & Misi Content -->
    <section class="py-28 bg-slate-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Visi -->
                <div class="p-12 rounded-[3rem] bg-gray-900 text-white relative overflow-hidden group shadow-2xl flex flex-col justify-center">
                    <div class="absolute top-0 right-0 w-48 h-48 bg-purple-500/10 blur-3xl group-hover:bg-purple-500/20 transition-colors"></div>
                    <h2 class="text-fuchsia-400 font-black tracking-[0.4em] text-sm mb-6 uppercase">Visi Utama</h2>
                    <h3 class="text-4xl font-black mb-8 tracking-tighter text-white">VISI KAMI</h3>
                    <p class="text-2xl font-bold leading-relaxed italic text-gray-100">
                        "Menjadi lembaga pendidikan muslimah terkemuka yang melahirkan generasi berakhlak mulia, cerdas intelektual, dan mandiri secara ekonomi."
                    </p>
                </div>

                <!-- Misi -->
                <div class="p-12 rounded-[3rem] bg-white border border-slate-200 shadow-sm hover:shadow-xl transition-all">
                    <h2 class="text-purple-700 font-black tracking-[0.4em] text-sm mb-6 uppercase">Langkah Konkret</h2>
                    <h3 class="text-4xl font-black mb-8 tracking-tighter text-gray-900">MISI KAMI</h3>
                    <ul class="space-y-8">
                        <li class="flex gap-6">
                            <span class="flex-shrink-0 w-12 h-12 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center font-black text-xl shadow-sm">1</span>
                            <div>
                                <h4 class="font-black text-gray-900 mb-1">Pendidikan Islami Modern</h4>
                                <p class="text-gray-600 font-medium leading-relaxed">Menyelenggarakan sistem pendidikan berkualitas dalam frame islami sesuai manhaj Ahlus Sunnah Wal Jamah.</p>
                            </div>
                        </li>
                        <li class="flex gap-6">
                            <span class="flex-shrink-0 w-12 h-12 rounded-2xl bg-fuchsia-100 text-fuchsia-600 flex items-center justify-center font-black text-xl shadow-sm">2</span>
                            <div>
                                <h4 class="font-black text-gray-900 mb-1">Integrasi Sains & Al-Qur'an</h4>
                                <p class="text-gray-600 font-medium leading-relaxed">Mengupayakan maksimal Tahfidz Al-Qur'an & Sains sebagai Brand Pesantren.</p>
                            </div>
                        </li>
                        <li class="flex gap-6">
                            <span class="flex-shrink-0 w-12 h-12 rounded-2xl bg-indigo-100 text-indigo-700 flex items-center justify-center font-black text-xl shadow-sm">3</span>
                            <div>
                                <h4 class="font-black text-gray-900 mb-1">Pembinaan Karakter</h4>
                                <p class="text-gray-600 font-medium leading-relaxed">Membentuk karakter muslimah yang berintegritas, disiplin, dan memiliki jiwa kepemimpinan.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
