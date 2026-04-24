@extends('layouts.app')

@section('title', 'Prestasi Santri')

@section('content')
    <section class="bg-gradient-to-br from-purple-900 to-indigo-900 py-24">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-black text-white tracking-tighter uppercase">Prestasi <br><span
                    class="text-fuchsia-400">Santriwati</span></h1>
            <p class="mt-4 text-purple-100 max-w-2xl mx-auto font-medium opacity-80 italic">"Membanggakan umat, mengukir
                prestasi dengan adab dan ilmu."</p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-3 gap-8">
            <div
                class="p-10 rounded-[3rem] bg-purple-50 border border-purple-100 hover:shadow-2xl transition duration-500 transform hover:-translate-y-2 group">
                <div
                    class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-orange-500 text-white rounded-3xl flex items-center justify-center text-4xl mb-8 shadow-xl shadow-yellow-100">
                    🏆</div>
                <h3 class="text-2xl font-black text-gray-900 mb-3 uppercase tracking-tight">Juara 1 MHQ Nasional</h3>
                <p class="text-gray-600 font-medium leading-relaxed">Musabaqah Hifdzil Qur'an tingkat Nasional kategori 10
                    Juz yang diselenggarakan di Jakarta tahun 2025.</p>
            </div>

            <div
                class="p-10 rounded-[3rem] bg-purple-50 border border-purple-100 hover:shadow-2xl transition duration-500 transform hover:-translate-y-2">
                <div
                    class="w-20 h-20 bg-gradient-to-br from-slate-300 to-slate-500 text-white rounded-3xl flex items-center justify-center text-4xl mb-8 shadow-xl shadow-slate-100">
                    🥈</div>
                <h3 class="text-2xl font-black text-gray-900 mb-3 uppercase tracking-tight">Medali Perak KSN</h3>
                <p class="text-gray-600 font-medium leading-relaxed">Kompetisi Sains Nasional bidang Matematika tingkat
                    Provinsi Nusa Tenggara Barat.</p>
            </div>

            <div
                class="p-10 rounded-[3rem] bg-purple-50 border border-purple-100 hover:shadow-2xl transition duration-500 transform hover:-translate-y-2">
                <div
                    class="w-20 h-20 bg-gradient-to-br from-purple-400 to-purple-600 text-white rounded-3xl flex items-center justify-center text-4xl mb-8 shadow-xl shadow-purple-100">
                    ⭐</div>
                <h3 class="text-2xl font-black text-gray-900 mb-3 uppercase tracking-tight">Santri Teladan</h3>
                <p class="text-gray-600 font-medium leading-relaxed">Penghargaan khusus untuk santriwati dengan adab,
                    kedisiplinan, dan hafalan terbaik tahun ajaran 2025/2026.</p>
            </div>
        </div>
    </section>
@endsection
