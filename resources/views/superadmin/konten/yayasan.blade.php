@extends('layouts.dashboard')

@section('title', 'Edit Profil Yayasan')
@section('page-title', 'Manajemen Profil Yayasan')

@section('sidebar-menu')
    @include('partials.sidebar-superadmin')
@endsection

@section('content')
<div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
    <div class="p-8 border-b border-slate-100 bg-slate-50/50">
        <h3 class="text-xl font-bold">Edit Informasi Kepala Yayasan</h3>
        <p class="text-slate-500 text-sm">Data ini akan ditampilkan di halaman utama web profile.</p>
    </div>
    
    <form action="{{ route('superadmin.konten.update', 'yayasan') }}" method="POST" enctype="multipart/form-data" class="p-8 space-y-6">
        @csrf @method('PUT')
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold mb-2">Nama Kepala Yayasan</label>
                    <input type="text" name="nama_kepala_yayasan" value="{{ $data->nama_kepala_yayasan ?? '' }}" required 
                        class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 outline-none transition">
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-2">Foto Kepala Yayasan</label>
                    <div class="flex items-center gap-4">
                        <div class="w-20 h-20 bg-slate-100 rounded-2xl overflow-hidden flex-shrink-0">
                            @if($data->foto_kepala_yayasan)
                                <img src="{{ asset('storage/' . $data->foto_kepala_yayasan) }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-slate-400">
                                    <i class="fas fa-image text-2xl"></i>
                                </div>
                            @endif
                        </div>
                        <input type="file" name="foto_kepala_yayasan" class="text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-2">Quotes/Motto</label>
                    <textarea name="quotes_kepala_yayasan" rows="3" 
                        class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 outline-none transition"
                        placeholder="Contoh: 'Pendidikan adalah senjata paling ampuh...' ">{{ $data->quotes_kepala_yayasan ?? '' }}</textarea>
                </div>
            </div>

            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold mb-2">Sambutan Singkat</label>
                    <textarea name="sambutan_kepala_yayasan" rows="4" 
                        class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 outline-none transition">{{ $data->sambutan_kepala_yayasan ?? '' }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-2">Deskripsi/Profil Lengkap</label>
                    <textarea name="deskripsi_kepala_yayasan" rows="6" 
                        class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 outline-none transition">{{ $data->deskripsi_kepala_yayasan ?? '' }}</textarea>
                </div>
            </div>
        </div>

        <div class="pt-6 border-t border-slate-100 flex justify-end">
            <button type="submit" class="px-8 py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-2xl shadow-lg shadow-indigo-500/30 transition transform hover:-translate-y-0.5">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
