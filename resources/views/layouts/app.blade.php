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

        /* Style tambahan untuk animasi dropdown */
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
                    <div
                        class="w-16 h-16 rounded-full bg-white shadow-md border-2 border-purple-100 flex items-center justify-center overflow-hidden mr-4 transition-transform group-hover:scale-105">
                        <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo Aisyah Samawa"
                            class="w-full h-full object-contain p-1">
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

                    <div class="relative dropdown">
                        <button
                            class="flex items-center text-gray-500 hover:text-purple-700 font-bold text-sm uppercase tracking-widest transition-colors focus:outline-none py-8">
                            Tentang
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div
                            class="dropdown-menu hidden absolute left-0 w-56 bg-white border border-purple-100 rounded-2xl shadow-xl z-50 overflow-hidden">
                            <a href="{{ route('tentang') }}#profil"
                                class="block px-6 py-4 text-xs font-bold text-gray-600 hover:bg-purple-50 hover:text-purple-700 transition border-b border-gray-50">Profile</a>
                            <a href="{{ route('tentang') }}#visi"
                                class="block px-6 py-4 text-xs font-bold text-gray-600 hover:bg-purple-50 hover:text-purple-700 transition border-b border-gray-50">Visi
                                & Misi</a>
                            <a href="{{ route('tentang') }}#sejarah"
                                class="block px-6 py-4 text-xs font-bold text-gray-600 hover:bg-purple-50 hover:text-purple-700 transition border-b border-gray-50">Sejarah</a>
                            <a href="{{ route('tentang') }}#struktur"
                                class="block px-6 py-4 text-xs font-bold text-gray-600 hover:bg-purple-50 hover:text-purple-700 transition border-b border-gray-50">Struktur
                                Organisasi</a>
                            <a href="{{ route('tentang') }}#akreditasi"
                                class="block px-6 py-4 text-xs font-bold text-gray-600 hover:bg-purple-50 hover:text-purple-700 transition">Akreditasi</a>
                        </div>
                    </div>

                    <a href="{{ route('akademik') }}"
                        class="text-gray-500 hover:text-purple-700 font-bold text-sm uppercase tracking-widest transition-colors">
                        Akademik
                    </a>
                    <a href="{{ route('kesiswaan') }}"
                        class="text-gray-500 hover:text-purple-700 font-bold text-sm uppercase tracking-widest transition-colors">
                        Kesiswaan
                    </a>

                    <a href="#ppdb"
                        class="bg-gradient-to-r from-purple-600 to-fuchsia-600 text-white px-8 py-3 rounded-2xl font-black text-sm uppercase tracking-tighter shadow-lg shadow-purple-200 hover:shadow-purple-400 transition-all transform hover:-translate-y-1">
                        PPDB ONLINE
                    </a>
                </div>

                <div class="md:hidden">
                    <button class="text-purple-600 focus:outline-none">
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </nav>

    <main class="min-h-screen">
        @yield('content')
    </main>

    <footer class="relative bg-gray-900 text-white pt-64 pb-16 mt-0">
        <!-- CTA Card Overlapping Footer -->
        <div class="absolute -top-32 left-1/2 transform -translate-x-1/2 w-full max-w-4xl px-4 z-30">
            <div class="bg-white rounded-[2.5rem] p-10 md:p-14 text-center shadow-2xl border border-purple-100">
                <h2 class="text-purple-700 font-black tracking-[0.4em] text-xs mb-4 uppercase">Daftar PPDB</h2>
                <p class="text-gray-600 mb-8 text-sm md:text-base max-w-2xl mx-auto font-medium leading-relaxed">
                    Jadilah bagian dari keluarga besar Aisyah Samawa. Pendaftaran TA 2026/2027 telah dibuka secara resmi.
                </p>
                <a href="#ppdb"
                    class="inline-block bg-gradient-to-r from-purple-600 to-fuchsia-600 text-white px-10 py-4 rounded-xl font-black hover:shadow-lg hover:shadow-purple-500/40 transition-all text-sm uppercase tracking-widest">
                    Daftar Sekarang
                </a>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 border-b border-gray-800 pb-16">
                <!-- Col 1: Logo & Desc -->
                <div class="col-span-1">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center overflow-hidden mr-3">
                            <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo" class="w-full h-full object-contain p-1">
                        </div>
                        <h4 class="text-xl font-black tracking-tighter uppercase">AISYAH <span class="text-purple-500">SAMAWA</span></h4>
                    </div>
                    <p class="text-gray-400 leading-relaxed font-medium text-sm">
                        Mewujudkan generasi muslimah yang kokoh dalam spiritualitas, cerdas secara intelektual, dan mulia dalam moralitas.
                    </p>
                </div>

                <!-- Col 2: Navigasi -->
                <div>
                    <h5 class="font-bold uppercase tracking-widest text-xs text-gray-500 mb-8">Navigasi Cepat</h5>
                    <ul class="space-y-4 font-bold text-gray-300 text-sm">
                        <li><a href="{{ route('tentang') }}#profil" class="hover:text-purple-400 transition">Profil Pondok</a></li>
                        <li><a href="{{ route('akademik') }}" class="hover:text-purple-400 transition">Akademik</a></li>
                        <li><a href="#ppdb" class="hover:text-purple-400 transition">Pendaftaran Santri</a></li>
                    </ul>
                </div>

                <!-- Col 3: Kontak -->
                <div>
                    <h5 class="font-bold uppercase tracking-widest text-xs text-gray-500 mb-8">Kontak</h5>
                    <p class="text-gray-400 font-medium leading-relaxed text-sm mb-4">
                        Brang Biji, Sumbawa Besar<br>
                        Nusa Tenggara Barat
                    </p>
                    <span class="text-white block font-black text-sm">+62 812-3456-7890</span>
                </div>

                <!-- Col 4: Map -->
                <div class="col-span-1">
                    <h5 class="font-bold uppercase tracking-widest text-xs text-gray-500 mb-8">Lokasi Kami</h5>
                    <div class="rounded-2xl overflow-hidden h-48 border border-gray-800 shadow-lg">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.064567223456!2d117.4208!3d-8.5!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOMKwMzAnMDAuMCJTIDExN8KwMjUnMTQuOSJF!5e0!3m2!1sid!2sid!4v1620000000000!5m2!1sid!2sid" 
                            class="w-full h-full grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all duration-500" 
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

            <div class="pt-8 text-center text-gray-500 text-xs font-bold uppercase tracking-[0.3em]">
                <p>&copy; 2026 PP Aisyah Samawa. Designed for Excellence.</p>
            </div>
        </div>
    </footer>

</body>

</html>
