<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | PP Aisyah Samawa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>

<body class="bg-gray-50">

    <nav class="bg-white/90 backdrop-blur-lg shadow-sm sticky top-0 z-50 border-b border-purple-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24">

                <div class="flex items-center group">
                    <div class="w-16 h-16 rounded-full bg-white shadow-md border-2 border-purple-100 flex items-center justify-center overflow-hidden mr-4 transition-transform group-hover:scale-105">
                        <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo Aisyah Samawa" class="w-full h-full object-contain p-1">
                    </div>
                    <div class="flex flex-col">
                        <span class="text-2xl font-black tracking-tighter text-gray-900 leading-none uppercase">
                            AISYAH <span class="text-purple-600">SAMAWA</span>
                        </span>
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.3em] mt-1">
                            Pondok Pesantren Modern
                        </span>
                    </div>
                </div>

                <div class="hidden md:flex items-center space-x-8">

                    <a href="{{ route('home') }}"
                        class="text-gray-500 hover:text-purple-700 font-bold text-sm uppercase tracking-widest transition-colors">
                        Beranda
                    </a>

                    {{-- TENTANG --}}
                    <div class="relative dropdown">
                        <button class="flex items-center text-gray-500 hover:text-purple-700 font-bold text-sm uppercase tracking-widest transition-colors focus:outline-none py-8">
                            Tentang
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu hidden absolute left-0 w-56 bg-white border border-purple-100 rounded-2xl shadow-xl z-50 overflow-hidden">
                            <a href="{{ route('tentang') }}#profil"
                                class="block px-6 py-4 text-xs font-bold text-gray-600 hover:bg-purple-50 hover:text-purple-700 transition border-b border-gray-50">Profile</a>
                            <a href="{{ route('tentang') }}#visi"
                                class="block px-6 py-4 text-xs font-bold text-gray-600 hover:bg-purple-50 hover:text-purple-700 transition border-b border-gray-50">Visi & Misi</a>
                            <a href="{{ route('tentang') }}#akreditasi"
                                class="block px-6 py-4 text-xs font-bold text-gray-600 hover:bg-purple-50 hover:text-purple-700 transition border-b border-gray-50">Akreditasi</a>
                            <a href="{{ route('tentang') }}#struktur"
                                class="block px-6 py-4 text-xs font-bold text-gray-600 hover:bg-purple-50 hover:text-purple-700 transition border-b border-gray-50">Struktur Organisasi</a>
                            <a href="{{ route('tentang') }}#fasilitas"
                                class="block px-6 py-4 text-xs font-bold text-gray-600 hover:bg-purple-50 hover:text-purple-700 transition">Fasilitas</a>
                        </div>
                    </div>

                    {{-- AKADEMIK --}}
                    <div class="relative dropdown">
                        <button class="flex items-center text-gray-500 hover:text-purple-700 font-bold text-sm uppercase tracking-widest transition-colors focus:outline-none py-8">
                            Akademik
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu hidden absolute left-0 w-56 bg-white border border-purple-100 rounded-2xl shadow-xl z-50 overflow-hidden">
                            <a href="{{ route('akademik') }}#jenjang"
                                class="block px-6 py-4 text-xs font-bold text-gray-600 hover:bg-purple-50 hover:text-purple-700 transition border-b border-gray-50">Jenjang Pendidikan</a>
                            <a href="{{ route('akademik') }}#kurikulum"
                                class="block px-6 py-4 text-xs font-bold text-gray-600 hover:bg-purple-50 hover:text-purple-700 transition border-b border-gray-50">Kurikulum</a>
                            <a href="{{ route('akademik') }}#unggulan"
                                class="block px-6 py-4 text-xs font-bold text-gray-600 hover:bg-purple-50 hover:text-purple-700 transition border-b border-gray-50">Program Unggulan</a>
                            <a href="{{ route('ppdb.landing') }}"
                                class="block px-6 py-4 text-xs font-bold text-gray-600 hover:bg-purple-50 hover:text-purple-700 transition">PPDB Online</a>
                        </div>
                    </div>

                    {{-- KESISWAAN --}}
                    <div class="relative dropdown">
                        <button class="flex items-center text-gray-500 hover:text-purple-700 font-bold text-sm uppercase tracking-widest transition-colors focus:outline-none py-8">
                            Kesiswaan
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu hidden absolute left-0 w-56 bg-white border border-purple-100 rounded-2xl shadow-xl z-50 overflow-hidden">
                            <a href="{{ route('kesiswaan.prestasi') }}"
                                class="block px-6 py-4 text-xs font-bold text-gray-600 hover:bg-purple-50 hover:text-purple-700 transition border-b border-gray-50">Prestasi</a>
                            <a href="{{ route('kesiswaan.ekskul') }}"
                                class="block px-6 py-4 text-xs font-bold text-gray-600 hover:bg-purple-50 hover:text-purple-700 transition border-b border-gray-50">Ekstrakurikuler</a>
                            <a href="{{ route('kesiswaan.berita') }}"
                                class="block px-6 py-4 text-xs font-bold text-gray-600 hover:bg-purple-50 hover:text-purple-700 transition">Berita & Kegiatan</a>
                        </div>
                    </div>

                    {{-- LAINNYA --}}
                    <div class="relative dropdown">
                        <button class="flex items-center text-gray-500 hover:text-purple-700 font-bold text-sm uppercase tracking-widest transition-colors focus:outline-none py-8">
                            Lainnya
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu hidden absolute left-0 w-56 bg-white border border-purple-100 rounded-2xl shadow-xl z-50 overflow-hidden">
                            <a href="{{ route('lainnya') }}#layanan"
                                class="block px-6 py-4 text-xs font-bold text-gray-600 hover:bg-purple-50 hover:text-purple-700 transition border-b border-gray-50">Layanan Informasi</a>
                            <a href="{{ route('lainnya') }}#kemitraan"
                                class="block px-6 py-4 text-xs font-bold text-gray-600 hover:bg-purple-50 hover:text-purple-700 transition">Kemitraan</a>
                        </div>
                    </div>

                    <a href="{{ route('ppdb.landing') }}"
                        class="bg-gradient-to-r from-purple-600 to-fuchsia-600 text-white px-8 py-3 rounded-2xl font-black text-sm uppercase tracking-tighter shadow-lg shadow-purple-200 hover:shadow-purple-400 transition-all transform hover:-translate-y-1">
                        PPDB ONLINE
                    </a>
                </div>

                <div class="md:hidden">
                    <button class="text-purple-600 focus:outline-none">
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </nav>

    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-gray-900 text-white pt-10 pb-6">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8 border-b border-gray-800 pb-8">

                <!-- KOLOM 1: INFO & MAPS -->
                <div class="space-y-4">
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center overflow-hidden mr-3">
                            <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo" class="w-full h-full object-contain p-1">
                        </div>
                        <h4 class="text-base font-black leading-tight uppercase tracking-tighter">AISYAH <span class="text-purple-500">SAMAWA</span></h4>
                    </div>
                    <p class="text-gray-400 text-xs leading-relaxed">
                        Jl. Pramuka RT/RW 002/001 Kel. Brang Biji, Kec. Sumbawa. NTB, Indonesia
                    </p>
                    <div class="rounded-lg overflow-hidden h-28 border border-gray-800">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.123!2d117.4184589!3d-8.4790876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcbecc5585949eb%3A0xe77bb9822f9cec70!2sPondok%20Pesantren%20'Aisyah%20Samawa!5e0!3m2!1sid!2sid!4v1714543140000!5m2!1sid!2sid"
                            class="w-full h-full grayscale opacity-70 hover:grayscale-0 transition-all duration-500"
                            style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>

                <!-- KOLOM 2: NAVIGASI CEPAT -->
                <div>
                    <h5 class="font-bold uppercase tracking-widest text-xs text-gray-500 mb-4">Navigasi Cepat</h5>
                    <ul class="space-y-2 text-sm font-bold">
                        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-purple-500' : 'text-gray-300' }} hover:text-purple-400 transition">Beranda</a></li>
                        <li><a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'text-purple-500' : 'text-gray-300' }} hover:text-purple-400 transition">Tentang</a></li>
                        <li><a href="{{ route('akademik') }}" class="{{ request()->routeIs('akademik') ? 'text-purple-500' : 'text-gray-300' }} hover:text-purple-400 transition">Akademik</a></li>
                        <li><a href="{{ route('kesiswaan.prestasi') }}" class="{{ request()->routeIs('kesiswaan.*') ? 'text-purple-500' : 'text-gray-300' }} hover:text-purple-400 transition">Kesiswaan</a></li>
                        <li><a href="{{ route('lainnya') }}" class="{{ request()->routeIs('lainnya') ? 'text-purple-500' : 'text-gray-300' }} hover:text-purple-400 transition">Lainnya</a></li>
                    </ul>
                </div>

                <!-- KOLOM 3: BANTUAN -->
                <div>
                    <h5 class="font-bold uppercase tracking-widest text-xs text-gray-500 mb-4">Bantuan</h5>
                    <ul class="space-y-2 text-sm text-gray-300 font-bold">
                        <li><a href="#" class="hover:text-purple-400 transition">Tata Cara PPDB</a></li>
                        <li><a href="#" class="hover:text-purple-400 transition">Persyaratan PPDB</a></li>
                        <li><a href="#" class="hover:text-purple-400 transition">Kontak Kami</a></li>
                        <li><a href="#" class="hover:text-purple-400 transition">Kebijakan Privasi</a></li>
                        <li><a href="#" class="hover:text-purple-400 transition">Pengaduan Layanan</a></li>
                    </ul>
                </div>

                <!-- KOLOM 4: HUBUNGI KAMI -->
                <div class="space-y-5">
                    <div>
                        <h5 class="font-bold uppercase tracking-widest text-xs text-gray-500 mb-4">Hubungi Kami</h5>
                        <ul class="space-y-2 text-sm text-gray-300">
                            <li class="flex items-center gap-2">
                                <span class="text-purple-500 text-xs">📧</span>
                                <a href="mailto:contact@aisyahsamawa.ponpes.id" class="hover:text-white text-xs">contact@aisyahsamawa.ponpes.id</a>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-purple-500 text-xs">💬</span>
                                <a href="#" class="hover:text-white text-xs">wa.me/6285156660970</a>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-purple-500 text-xs">📞</span>
                                <span class="text-xs">+6285156660970</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="font-bold uppercase tracking-widest text-[10px] text-gray-500 mb-3">Ikuti Kami</h5>
                        <div class="flex gap-2">
                            <a href="#" class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition text-xs font-black">FB</a>
                            <a href="#" class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-sky-500 transition text-xs font-black">TW</a>
                            <a href="#" class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-red-600 transition text-xs font-black">YT</a>
                            <a href="#" class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-pink-600 transition text-xs font-black">IG</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <p class="text-gray-500 text-[10px] font-bold uppercase tracking-[0.3em]">
                    © 2026 PP Aisyah Samawa. Designed By AsTech.
                </p>
            </div>
        </div>
    </footer>

</body>

</html>