@extends('layouts.app')

@section('title', 'Sejarah Pondok')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-32 md:py-48 px-4 overflow-hidden bg-purple-900">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/bangunan.jpeg') }}" class="w-full h-full object-cover object-center brightness-50"
                alt="Sejarah Aisyah Samawa">
            <div class="absolute inset-0 bg-gradient-to-b from-purple-900/80 via-purple-800/40 to-indigo-900/90"></div>
        </div>

        <div class="max-w-7xl mx-auto text-center relative z-20">
            <span
                class="inline-block px-4 py-1.5 mb-6 text-xs font-black tracking-[0.2em] text-fuchsia-300 uppercase bg-fuchsia-500/10 backdrop-blur-md rounded-full border border-fuchsia-500/20">
                Jejak Langkah
            </span>
            <h1 class="text-5xl md:text-8xl font-black text-white leading-tight mb-8 tracking-tighter drop-shadow-2xl">
                Sejarah <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-300 to-indigo-200">KAMI</span>
            </h1>
            <p class="mt-6 text-lg md:text-2xl text-purple-100 max-w-3xl mx-auto font-medium leading-relaxed drop-shadow-md">
                Perjalanan panjang dalam membangun pusat peradaban muslimah di tanah Samawa.
            </p>
        </div>
    </section>

    <!-- Timeline Content -->
    <section class="py-28 bg-white overflow-hidden">
        <div class="max-w-5xl mx-auto px-4">
            <div class="text-center mb-20">
                <h2 class="text-fuchsia-600 font-black tracking-[0.4em] text-sm mb-4 uppercase">Timeline</h2>
                <h3 class="text-4xl md:text-5xl font-black text-gray-900 tracking-tighter">Perjalanan <span class="text-purple-700 italic">Membangun Negeri</span></h3>
            </div>

            <div class="relative">
                <!-- Vertical Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-purple-100 via-purple-500 to-purple-100 hidden md:block"></div>

                <div class="space-y-24">
                    <!-- Event 1 -->
                    <div class="relative flex flex-col md:flex-row items-center">
                        <div class="flex-1 md:pr-20 text-right hidden md:block">
                            <h4 class="text-5xl font-black text-purple-800 opacity-20">2015</h4>
                        </div>
                        <div class="w-16 h-16 bg-white border-4 border-fuchsia-500 rounded-2xl z-10 relative mb-4 md:mb-0 transform rotate-45 flex items-center justify-center">
                            <div class="transform -rotate-45 font-black text-fuchsia-500">01</div>
                        </div>
                        <div class="flex-1 md:pl-20">
                            <h4 class="text-3xl font-black text-purple-800 md:hidden mb-2">2015</h4>
                            <h5 class="text-2xl font-black text-gray-900 mb-3 tracking-tight">Peletakan Batu Pertama</h5>
                            <p class="text-gray-600 leading-relaxed font-medium text-lg">Berawal dari niat tulus para pendiri untuk menyediakan pendidikan khusus muslimah yang berkualitas di Sumbawa. Pembangunan gedung asrama pertama dimulai.</p>
                        </div>
                    </div>

                    <!-- Event 2 -->
                    <div class="relative flex flex-col md:flex-row items-center">
                        <div class="flex-1 md:pr-20 text-right">
                            <h4 class="text-3xl font-black text-purple-800 md:hidden mb-2">2017</h4>
                            <h5 class="text-2xl font-black text-gray-900 mb-3 tracking-tight">Angkatan Pertama</h5>
                            <p class="text-gray-600 leading-relaxed font-medium text-lg text-right">Resmi beroperasi dengan menerima 50 santriwati pertama yang menjadi pionir dalam sejarah Aisyah Samawa. Kurikulum integratif mulai diterapkan.</p>
                        </div>
                        <div class="w-16 h-16 bg-white border-4 border-purple-800 rounded-2xl z-10 relative mb-4 md:mb-0 transform rotate-45 flex items-center justify-center">
                            <div class="transform -rotate-45 font-black text-purple-800">02</div>
                        </div>
                        <div class="flex-1 md:pl-20 hidden md:block">
                            <h4 class="text-5xl font-black text-purple-800 opacity-20">2017</h4>
                        </div>
                    </div>

                    <!-- Event 3 -->
                    <div class="relative flex flex-col md:flex-row items-center">
                        <div class="flex-1 md:pr-20 text-right hidden md:block">
                            <h4 class="text-5xl font-black text-purple-800 opacity-20">2022</h4>
                        </div>
                        <div class="w-16 h-16 bg-white border-4 border-fuchsia-500 rounded-2xl z-10 relative mb-4 md:mb-0 transform rotate-45 flex items-center justify-center">
                            <div class="transform -rotate-45 font-black text-fuchsia-500">03</div>
                        </div>
                        <div class="flex-1 md:pl-20">
                            <h4 class="text-3xl font-black text-purple-800 md:hidden mb-2">2022</h4>
                            <h5 class="text-2xl font-black text-gray-900 mb-3 tracking-tight">Akreditasi & Ekspansi</h5>
                            <p class="text-gray-600 leading-relaxed font-medium text-lg">Mendapatkan akreditasi unggul dan mulai membangun fasilitas laboratorium sains serta asrama baru bertaraf internasional.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
