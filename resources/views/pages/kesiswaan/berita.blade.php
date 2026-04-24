@extends('layouts.app')

@section('title', 'Warta Pondok')

@section('content')
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 border-b border-gray-100 pb-10">
                <div>
                    <h2 class="text-5xl font-black text-gray-900 tracking-tighter uppercase">Warta <span
                            class="text-purple-600">Santri</span></h2>
                    <p class="text-gray-500 mt-4 text-xl font-medium">Kisah inspiratif dan informasi terbaru dari dalam
                        pondok.</p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-16">
                <div class="group cursor-pointer">
                    <div class="overflow-hidden rounded-[3rem] mb-8 shadow-2xl aspect-video relative">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=800"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-700 brightness-90">
                        <div
                            class="absolute top-8 left-8 bg-purple-600 text-white px-6 py-2 rounded-full text-xs font-black uppercase tracking-widest shadow-lg">
                            Headline</div>
                    </div>
                    <div class="flex items-center gap-4 mb-4">
                        <span
                            class="bg-purple-100 text-purple-700 px-3 py-1 rounded-lg text-xs font-black uppercase">Kegiatan</span>
                        <span class="text-gray-400 font-bold text-sm">24 April 2026</span>
                    </div>
                    <h3 class="text-3xl font-black text-gray-900 leading-tight group-hover:text-purple-600 transition">
                        Rihlah Edukasi: Santriwati Kunjungi Laboratorium Sains Nasional</h3>
                    <p class="text-gray-500 mt-4 leading-relaxed font-medium">Memperdalam pemahaman teori di kelas dengan
                        melihat langsung implementasi sains di dunia nyata...</p>
                </div>

                <div class="space-y-12">
                    @for ($i = 1; $i <= 3; $i++)
                        <div class="flex gap-8 group cursor-pointer border-b border-gray-50 pb-10">
                            <div class="w-40 h-40 flex-shrink-0 rounded-[2rem] overflow-hidden shadow-lg">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=400"
                                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                            </div>
                            <div>
                                <span class="text-purple-500 font-black text-xs uppercase tracking-widest">Warta
                                    Internal</span>
                                <h4
                                    class="text-xl font-black text-gray-900 group-hover:text-purple-600 transition mt-2 leading-snug">
                                    Persiapan Ujian Akhir Semester TA 2026</h4>
                                <p class="text-sm text-gray-400 mt-2 font-medium">Santriwati mulai memasuki masa karantina
                                    belajar intensif...</p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
@endsection
