@extends('layouts.dashboard')

@section('title', 'Informasi Umum')
@section('page-title', 'Konten Informasi Umum')

@section('sidebar-menu')
    @include('partials.sidebar-superadmin')
@endsection

@section('content')
<div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
    <div class="p-8 border-b border-slate-100 bg-slate-50/50">
        <h3 class="text-xl font-bold">Edit Informasi Umum & Kontak</h3>
        <p class="text-slate-500 text-sm">Informasi kontak, media sosial, dan alamat pondok.</p>
    </div>
    
    <form action="{{ route('superadmin.konten.update', 'umum') }}" method="POST" class="p-8 space-y-6">
        @csrf @method('PUT')
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold mb-2">Alamat Lengkap</label>
                    <textarea name="alamat" rows="3" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-indigo-600">{{ $data->alamat ?? '' }}</textarea>
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2">Email Kontak</label>
                    <input type="email" name="email" value="{{ $data->email ?? '' }}" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-indigo-600">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2">Nomor Telepon/WA</label>
                    <input type="text" name="no_telp" value="{{ $data->no_telp ?? '' }}" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-indigo-600">
                </div>
            </div>

            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold mb-2">Link Facebook</label>
                    <input type="url" name="facebook" value="{{ $data->facebook ?? '' }}" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-indigo-600">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2">Link Instagram</label>
                    <input type="url" name="instagram" value="{{ $data->instagram ?? '' }}" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-indigo-600">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2">Link YouTube</label>
                    <input type="url" name="youtube" value="{{ $data->youtube ?? '' }}" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-indigo-600">
                </div>
            </div>
        </div>

        <div class="pt-8 border-t border-slate-100">
            <h4 class="text-lg font-bold mb-4">Pengaturan Pembayaran PPDB</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div>
                    <label class="block text-sm font-semibold mb-2">Nama Bank</label>
                    <input type="text" name="ppdb_bank_name" value="{{ $data->ppdb_bank_name ?? '' }}" placeholder="Contoh: BSI / Mandiri" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-indigo-600">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2">Nomor Rekening</label>
                    <input type="text" name="ppdb_bank_account" value="{{ $data->ppdb_bank_account ?? '' }}" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-indigo-600">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2">Nama Pemilik Rekening</label>
                    <input type="text" name="ppdb_bank_owner" value="{{ $data->ppdb_bank_owner ?? '' }}" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-indigo-600">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2">Nominal Pembayaran</label>
                    <input type="text" name="ppdb_nominal" value="{{ $data->ppdb_nominal ?? '' }}" placeholder="Contoh: 150.000" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-indigo-600">
                </div>
            </div>
        </div>

        <div class="pt-6 border-t border-slate-100 flex justify-end">
            <button type="submit" class="px-8 py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-2xl shadow-lg shadow-indigo-500/30 transition transform hover:-translate-y-0.5">
                Simpan Informasi Umum
            </button>
        </div>
    </form>
</div>
@endsection
