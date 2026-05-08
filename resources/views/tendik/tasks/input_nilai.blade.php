@extends('layouts.dashboard')

@section('title', 'Input Nilai Seleksi')
@section('page-title', 'Input Nilai - ' . strtoupper($type))

@section('sidebar-menu')
    @include('partials.sidebar-tendik')
@endsection

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="mb-6">
        <a href="{{ route('tendik.tugas.index') }}" class="text-slate-500 hover:text-indigo-600 font-medium text-sm flex items-center gap-2 transition">
            <i class="fas fa-arrow-left"></i> Kembali ke Daftar Tugas
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Profile Info -->
        <div class="lg:col-span-1">
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm sticky top-8">
                <div class="flex flex-col items-center text-center">
                    <div class="w-24 h-24 bg-slate-100 rounded-2xl flex items-center justify-center text-slate-400 text-3xl mb-4 border-2 border-white shadow-sm">
                        @if($pendaftar->foto)
                            <img src="{{ asset('storage/' . $pendaftar->foto) }}" alt="Foto Santri" class="w-full h-full object-cover rounded-2xl">
                        @else
                            <i class="fas fa-user-graduate"></i>
                        @endif
                    </div>
                    <h3 class="font-bold text-slate-800 text-lg leading-tight">{{ $pendaftar->nama_lengkap }}</h3>
                    <p class="text-indigo-600 text-sm font-semibold mt-1">{{ $seleksi->jenjang }}</p>
                </div>

                <div class="mt-8 space-y-4">
                    <div>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">No. Pendaftaran</span>
                        <p class="text-sm font-medium text-slate-700">{{ $pendaftar->no_pendaftaran ?? '-' }}</p>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">NISN / NIK</span>
                        <p class="text-sm font-medium text-slate-700">{{ $pendaftar->nisn ?? $pendaftar->nik ?? '-' }}</p>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Sekolah Asal</span>
                        <p class="text-sm font-medium text-slate-700">{{ $pendaftar->nama_sekolah_asal ?? '-' }}</p>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Jenis Kelamin</span>
                        <p class="text-sm font-medium text-slate-700">{{ $pendaftar->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
                    </div>
                </div>

                @php
                    $gform = $seleksi->link_gform;
                    $gmeet = null;
                    if($type == 'akademik') $gmeet = $seleksi->link_gmeet_akademik;
                    elseif($type == 'wawancara') $gmeet = $seleksi->link_gmeet_wawancara;
                    elseif($type == 'alquran') $gmeet = $seleksi->link_gmeet_alquran;
                @endphp

                @if($gform || $gmeet)
                <div class="mt-8 pt-6 border-t border-slate-100">
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block mb-3">Link Seleksi</span>
                    <div class="space-y-2">
                        @if($type == 'akademik' && $gform)
                        <a href="{{ $gform }}" target="_blank" class="flex items-center gap-3 p-3 bg-emerald-50 text-emerald-700 rounded-xl hover:bg-emerald-100 transition border border-emerald-100 group">
                            <div class="w-8 h-8 bg-white rounded-lg flex items-center justify-center text-emerald-600 shadow-sm group-hover:scale-110 transition">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-xs font-bold">Link G-Form</span>
                                <span class="text-[10px] opacity-70">Buka Lembar Ujian</span>
                            </div>
                        </a>
                        @endif

                        @if($gmeet)
                        <a href="{{ $gmeet }}" target="_blank" class="flex items-center gap-3 p-3 bg-blue-50 text-blue-700 rounded-xl hover:bg-blue-100 transition border border-blue-100 group">
                            <div class="w-8 h-8 bg-white rounded-lg flex items-center justify-center text-blue-600 shadow-sm group-hover:scale-110 transition">
                                <i class="fas fa-video"></i>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-xs font-bold">Link G-Meet</span>
                                <span class="text-[10px] opacity-70">Monitoring Seleksi</span>
                            </div>
                        </a>
                        @endif
                    </div>
                </div>
                @endif
            </div>
        </div>

        <!-- Input Form -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <div class="p-6 border-b border-slate-100 bg-slate-50/50">
                    <h3 class="text-lg font-bold text-slate-800">
                        @if($type == 'akademik')
                            Input Nilai Seleksi Akademik
                        @elseif($type == 'wawancara')
                            Input Nilai Seleksi Wawancara
                        @elseif($type == 'alquran')
                            Input Nilai Seleksi Baca Al-Quran
                        @endif
                    </h3>
                    <p class="text-xs text-slate-500 mt-1">Berikan nilai objektif sesuai dengan hasil seleksi santri.</p>
                </div>

                <form action="{{ route('tendik.tugas.store-nilai', ['id' => $seleksi->id, 'type' => $type]) }}" method="POST" class="p-6 space-y-6">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="nilai" class="block text-sm font-bold text-slate-700 mb-2">Nilai (0 - 100)</label>
                        <div class="relative">
                            <input type="number" name="nilai" id="nilai" min="0" max="100" step="0.01" 
                                value="{{ old('nilai', $type == 'akademik' ? $seleksi->nilai_akademik : $seleksi->nilai_wawancara) }}"
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 outline-none transition font-bold text-lg"
                                placeholder="0.00" required>
                            <div class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 font-bold">PTS</div>
                        </div>
                        <p class="text-[10px] text-slate-400 mt-2 italic">* Standar kelulusan minimum (KKM) adalah 70.00</p>
                    </div>

                    <div>
                        <label for="catatan" class="block text-sm font-bold text-slate-700 mb-2">Catatan / Feedback</label>
                        <textarea name="catatan" id="catatan" rows="5" 
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 outline-none transition text-sm"
                            placeholder="Tuliskan catatan atau hasil observasi singkat mengenai santri ini...">{{ old('catatan', $type == 'akademik' ? $seleksi->catatan_akademik : $seleksi->catatan_wawancara) }}</textarea>
                    </div>

                    <div class="pt-4 flex items-center justify-between gap-4">
                        <div class="flex items-center gap-2 text-xs text-slate-500 italic">
                            <i class="fas fa-info-circle text-indigo-400"></i>
                            Data akan tersimpan secara permanen
                        </div>
                        <button type="submit" class="px-8 py-3 bg-indigo-600 text-white rounded-xl font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-200 flex items-center gap-2">
                            <i class="fas fa-save"></i> Simpan Penilaian
                        </button>
                    </div>
                </form>
            </div>

            <!-- Previous Value if any -->
            @php
                $otherType = ($type == 'akademik') ? 'wawancara' : 'akademik';
                $otherNilai = ($type == 'akademik') ? $seleksi->nilai_wawancara : $seleksi->nilai_akademik;
                $otherCatatan = ($type == 'akademik') ? $seleksi->catatan_wawancara : $seleksi->catatan_akademik;
            @endphp

            @if($otherNilai !== null)
            <div class="mt-6 bg-slate-50 border border-slate-200 rounded-2xl p-6">
                <h4 class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-4">Hasil Seleksi {{ ucfirst($otherType) }}</h4>
                <div class="flex items-start gap-4">
                    <div class="px-4 py-2 bg-white border border-slate-200 rounded-xl font-bold text-indigo-600">
                        {{ $otherNilai }}
                    </div>
                    <div class="flex-grow">
                        <p class="text-sm text-slate-600 leading-relaxed italic">
                            "{{ $otherCatatan ?? 'Tidak ada catatan.' }}"
                        </p>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
