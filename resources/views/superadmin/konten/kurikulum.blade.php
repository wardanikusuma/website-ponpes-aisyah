@extends('layouts.dashboard')

@section('title', 'Manajemen Kurikulum')
@section('page-title', 'Kurikulum Pendidikan')

@section('sidebar-menu')
    @include('partials.sidebar-superadmin')
@endsection

@section('content')
<div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
    <div class="p-8 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
        <div>
            <h3 class="text-xl font-bold">Daftar Kurikulum</h3>
            <p class="text-slate-500 text-sm">Informasi kurikulum yang diterapkan di pondok pesantren.</p>
        </div>
        <button onclick="document.getElementById('add-modal').classList.remove('hidden')" class="px-6 py-3 bg-indigo-600 text-white rounded-2xl text-sm font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-500/30">
            <i class="fas fa-plus mr-2"></i> Tambah Kurikulum
        </button>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-slate-50 text-slate-500 text-xs font-bold uppercase tracking-wider">
                <tr>
                    <th class="px-8 py-4">Nama Program</th>
                    <th class="px-8 py-4">Target Capaian</th>
                    <th class="px-8 py-4">Urutan</th>
                    <th class="px-8 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($data as $k)
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-4 font-bold text-slate-700">{{ $k->nama_kurikulum }}</td>
                    <td class="px-8 py-4 text-slate-600 text-sm italic">{{ $k->target_capaian ?? '-' }}</td>
                    <td class="px-8 py-4 text-slate-500 text-sm">{{ $k->urutan ?? 0 }}</td>
                    <td class="px-8 py-4">
                        <div class="flex gap-3">
                            <button class="text-slate-400 hover:text-indigo-600 transition"><i class="fas fa-edit"></i></button>
                            <form action="#" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-slate-400 hover:text-rose-600 transition"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-8 py-20 text-center text-slate-400 italic">Belum ada data kurikulum.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Add -->
<div id="add-modal" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-3xl p-8 max-w-lg w-full shadow-2xl">
        <h3 class="text-2xl font-bold mb-6">Tambah Kurikulum Baru</h3>
        <form action="{{ route('superadmin.konten.update', 'kurikulum') }}" method="POST" class="space-y-6">
            @csrf @method('PUT')
            <div>
                <label class="block text-sm font-semibold mb-2">Nama Program Kurikulum</label>
                <input type="text" name="nama_kurikulum" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-indigo-600">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-2">Target Capaian</label>
                <input type="text" name="target_capaian" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-indigo-600">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-2">Deskripsi Lengkap</label>
                <textarea name="deskripsi" rows="4" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-indigo-600"></textarea>
            </div>
            <div>
                <label class="block text-sm font-semibold mb-2">Urutan Tampil</label>
                <input type="number" name="urutan" value="0" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-indigo-600">
            </div>
            <div class="pt-4 flex gap-4">
                <button type="button" onclick="document.getElementById('add-modal').classList.add('hidden')" class="flex-grow py-4 bg-slate-100 text-slate-600 font-bold rounded-2xl">Batal</button>
                <button type="submit" class="flex-grow py-4 bg-indigo-600 text-white font-bold rounded-2xl shadow-lg shadow-indigo-500/30">Simpan Data</button>
            </div>
        </form>
    </div>
</div>
@endsection
