@extends('layouts.app')

@section('title', 'PPDB Online')

@section('content')
<div class="bg-gradient-to-br from-purple-900 to-indigo-900 py-24 text-white">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-5xl font-black mb-6">PPDB ONLINE TA 2026/2027</h1>
        <p class="text-xl text-purple-200 max-w-2xl mx-auto mb-12">Bergabunglah bersama kami untuk mencetak generasi muslimah yang cerdas, berakhlak mulia, dan berwawasan luas.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- PAUD -->
            <div class="bg-white/10 backdrop-blur-md p-8 rounded-3xl border border-white/20 hover:bg-white/20 transition group">
                <div class="w-20 h-20 bg-purple-500 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition">
                    <i class="fas fa-child"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-left">Pendaftaran PAUD</h3>
                <p class="text-purple-200 text-left mb-8">Pendidikan anak usia dini untuk membentuk karakter islami sejak dini.</p>
                @if($kontenUmum && !$kontenUmum->is_registration_open_paud)
                    <button disabled class="block w-full py-4 bg-slate-300 text-slate-500 font-bold rounded-xl text-center cursor-not-allowed">Pendaftaran Ditutup</button>
                @else
                    <a href="{{ route('ppdb.daftar.paud') }}" class="block w-full py-4 bg-white text-purple-900 font-bold rounded-xl text-center hover:bg-purple-100 transition">Daftar PAUD</a>
                @endif
            </div>

            <!-- SMA/SMP/SD -->
            @php
                $anySchoolOpen = $kontenUmum ? ($kontenUmum->is_registration_open_sd || $kontenUmum->is_registration_open_smp || $kontenUmum->is_registration_open_sma) : true;
            @endphp
            <div class="bg-white/10 backdrop-blur-md p-8 rounded-3xl border border-white/20 hover:bg-white/20 transition group">
                <div class="w-20 h-20 bg-indigo-500 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition">
                    <i class="fas fa-school"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-left">Pendaftaran SD/SMP/SMA</h3>
                <p class="text-purple-200 text-left mb-8">Jenjang pendidikan dasar dan menengah dengan kurikulum terpadu.</p>
                @if(!$anySchoolOpen)
                    <button disabled class="block w-full py-4 bg-slate-300 text-slate-500 font-bold rounded-xl text-center cursor-not-allowed">Pendaftaran Ditutup</button>
                @else
                    <a href="{{ route('ppdb.daftar.sekolah') }}" class="block w-full py-4 bg-white text-indigo-900 font-bold rounded-xl text-center hover:bg-indigo-100 transition">Daftar Sekarang</a>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Info Section -->
<div class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <div>
                <h4 class="text-indigo-600 font-bold uppercase tracking-widest text-sm mb-4">Prosedur</h4>
                <h2 class="text-3xl font-bold mb-6">Cara Mendaftar</h2>
                <ul class="space-y-6">
                    <li class="flex gap-4">
                        <div class="w-10 h-10 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center flex-shrink-0 font-bold">1</div>
                        <div>
                            <p class="font-bold">Isi Formulir</p>
                            <p class="text-sm text-slate-500">Lengkapi data diri dan orang tua pada form online.</p>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <div class="w-10 h-10 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center flex-shrink-0 font-bold">2</div>
                        <div>
                            <p class="font-bold">Verifikasi Berkas</p>
                            <p class="text-sm text-slate-500">Admin akan melakukan validasi data administrasi.</p>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <div class="w-10 h-10 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center flex-shrink-0 font-bold">3</div>
                        <div>
                            <p class="font-bold">Ujian Seleksi</p>
                            <p class="text-sm text-slate-500">Ikuti tes akademik, wawancara, dan tes Al-Quran.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="lg:col-span-2">
                <div class="bg-slate-50 p-12 rounded-3xl">
                    <h2 class="text-3xl font-bold mb-8 text-indigo-900">Jadwal Penting</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
                            <p class="text-xs font-bold text-slate-400 uppercase mb-2">Gelombang 1</p>
                            <p class="text-lg font-bold">Januari - Maret 2026</p>
                            <p class="text-sm text-indigo-600 mt-2 font-medium">Diskon Biaya Masuk 10%</p>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
                            <p class="text-xs font-bold text-slate-400 uppercase mb-2">Gelombang 2</p>
                            <p class="text-lg font-bold">April - Juni 2026</p>
                            <p class="text-sm text-indigo-600 mt-2 font-medium">Kuota Terbatas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
