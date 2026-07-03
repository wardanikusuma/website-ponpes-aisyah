@extends('layouts.app')

@section('title', 'Lainnya - Informasi & Kontak')

@section('content')
    {{-- HERO SECTION --}}
    <section class="relative min-h-screen flex items-center pt-20 bg-purple-900">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/bangunan.jpeg') }}" class="w-full h-full object-cover object-center brightness-50"
                alt="Gedung Aisyah Samawa">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-900/60 to-transparent"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-20 w-full">
            <div class="max-w-4xl mx-auto text-center">
                <span
                    class="inline-block px-4 py-1.5 mb-6 text-xs font-black tracking-[0.2em] text-fuchsia-300 uppercase bg-fuchsia-500/10 backdrop-blur-md rounded-full border border-fuchsia-500/20">
                    Layanan Informasi
                </span>

                <h1 class="text-5xl md:text-8xl font-black text-white leading-tight mb-6 tracking-tighter drop-shadow-2xl">
                    HUBUNGI
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-300 via-purple-100 to-indigo-200 uppercase">
                        Kami
                    </span>
                </h1>

                <p class="text-lg md:text-2xl text-purple-100 font-medium leading-relaxed drop-shadow-md mb-4">
                    Akses layanan informasi pondok pesantren melalui kanal di bawah ini.
                </p>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-gradient-to-b from-white via-purple-50/70 to-fuchsia-50 py-20 md:py-28">
        <div class="pointer-events-none absolute -left-32 top-20 h-96 w-96 rounded-full bg-purple-300/25 blur-3xl"></div>
        <div class="pointer-events-none absolute -right-32 bottom-10 h-[28rem] w-[28rem] rounded-full bg-fuchsia-300/20 blur-3xl"></div>
        <div class="pointer-events-none absolute inset-0 opacity-30" style="background-image: radial-gradient(#c4b5fd 1.3px, transparent 1.3px); background-size: 32px 32px;"></div>

        <div class="relative z-10 max-w-6xl mx-auto px-6">
<!--
        {{-- DAFTAR PPDB (CTA BOX) --}}
        <div class="mb-24">
            <a href="#"
                class="group block relative p-10 bg-white border-2 border-dashed border-purple-200 rounded-[3rem] text-center hover:border-purple-500 transition-all duration-500 overflow-hidden shadow-sm hover:shadow-xl">
                <div
                    class="absolute inset-0 bg-purple-50 translate-y-full group-hover:translate-y-0 transition-transform duration-500 opacity-50">
                </div>
                <div class="relative z-10">
                    <h2 class="text-2xl md:text-3xl font-black text-purple-900 uppercase tracking-tighter">Ingin Daftar
                        PPDB?</h2>
                    <p
                        class="text-fuchsia-600 font-bold mt-2 uppercase tracking-widest text-sm italic group-hover:scale-110 transition-transform">
                        Klik Di Sini Untuk Memulai →
                    </p>
                </div>
            </a>
        </div> -->

        {{-- LAYANAN INFORMASI --}}
        <div id="layanan" class="scroll-mt-24">
            <div class="mx-auto mb-14 max-w-2xl text-center">
                <p class="mt-5 text-base leading-relaxed text-slate-600 md:text-lg">Pilih kanal yang paling nyaman. Tim kami siap membantu informasi pendidikan, pendaftaran, dan kegiatan pondok.</p>
            </div>

            @php
                $layanan = [
                    [
                        't' => 'WhatsApp',
                        'd' => 'Hubungi admin untuk tanya jawab cepat.',
                        'i' => asset('assets/img/WA.svg'),
                        'c' => 'from-green-400 to-emerald-600',
                        'link' => 'https://wa.me/6285156660970',
                    ],
                    [
                        't' => 'Email',
                        'd' => 'Pertanyaan seputar kurikulum dan pendaftaran.',
                        'i' => asset('assets/img/EMAIL.svg'),
                        'c' => 'from-white to-indigo-600',
                        'link' => 'mailto:humas.ponpesaisyahsamawa@gmail.com',
                    ],
                    [
                        't' => 'Instagram',
                        'd' => 'Update kegiatan harian santriwati.',
                        'i' => asset('assets/img/IG.svg'),
                        'c' => 'from-purple-700 via-pink-500 to-yellow-400',
                        'link' => 'https://instagram.com/smaplusaisyah',
                    ],
                    [
                        't' => 'Facebook',
                        'd' => 'Komunitas dan informasi berita terbaru.',
                        'i' => asset('assets/img/FB.svg'),
                        'c' => 'from-blue-600 to-blue-800',
                        'link' => 'https://www.facebook.com/ponpes.aisyah.samawa',
                    ],
                    [
                        't' => 'YouTube',
                        'd' => 'Dokumentasi video acara besar pondok.',
                        'i' => asset('assets/img/YT.svg'),
                        'c' => 'from-red-600 to-red-600',
                        'link' => 'https://youtube.com/@aisyahtv5676',
                    ],
                ];
            @endphp

            <div class="grid gap-6 md:grid-cols-2">
                @foreach ($layanan as $l)
                    <a href="{{ $l['link'] }}" target="_blank" rel="noopener noreferrer"
                        class="group relative flex min-h-56 flex-col overflow-hidden rounded-[2rem] border border-white/80 bg-white/90 p-7 shadow-[0_18px_50px_-30px_rgba(88,28,135,0.45)] backdrop-blur-sm transition-all duration-500 hover:-translate-y-2 hover:border-purple-200 hover:shadow-[0_25px_60px_-25px_rgba(126,34,206,0.42)] sm:p-8 {{ $loop->last && $loop->count % 2 !== 0 ? 'md:col-span-2 md:mx-auto md:w-[calc(50%-0.75rem)]' : '' }}">
                        <div class="absolute -right-12 -top-12 h-36 w-36 rounded-full bg-gradient-to-br {{ $l['c'] }} opacity-[0.08] transition-transform duration-500 group-hover:scale-125"></div>
                        <div class="relative flex items-start justify-between gap-5">
                            <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br {{ $l['c'] }} shadow-lg transition duration-500 group-hover:rotate-3 group-hover:scale-110">
                                <img src="{{ $l['i'] }}" alt="{{ $l['t'] }}" class="h-8 w-8 object-contain">
                            </div>

                        </div>
                        <div class="relative mt-6 flex-1">
                            <h3 class="text-xl font-black uppercase tracking-tight text-slate-900 md:text-2xl">{{ $l['t'] }}</h3>
                            <p class="mt-2 leading-relaxed text-slate-500">{{ $l['d'] }}</p>
                        </div>
                        <div class="relative mt-5 flex items-center gap-2 text-xs font-black uppercase tracking-[0.18em] text-purple-700">
                            Hubungi Sekarang 
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        <!-- {{-- KEMITRAAN / PARTNERSHIP --}}
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
                    <div
                        class="group p-8 bg-slate-50/50 rounded-[2rem] border border-transparent hover:border-purple-100 hover:bg-white transition-all duration-500 flex items-center justify-center">
                        <img src="{{ asset('assets/img/mitra/' . $m['logo']) }}" alt="{{ $m['nama'] }}"
                            class="h-12 md:h-16 w-auto object-contain filter grayscale opacity-50 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500 transform group-hover:scale-110">
                    </div>
                @endforeach
            </div>

            {{-- FOOTER KECIL UNTUK AJAKAN KERJASAMA --}}
            <div class="mt-12 text-center">
                <p class="text-slate-400 text-xs italic">
                    Ingin menjalin kerjasama dengan Pondok Pesantren?
                    <a href="mailto:kemitraan@email.com" class="text-purple-600 font-bold hover:underline ml-1">Ajukan
                        Proposal →</a>
                </p>
            </div>
        </div> -->

        </div>
    </section>
@endsection
