@extends('layouts.dashboard')

@section('title', 'Manajemen Prestasi')
@section('page-title', 'Prestasi Santri & Pondok')

@section('sidebar-menu')
    @include('partials.sidebar-superadmin')
@endsection

@section('content')
<div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
    <div class="p-8 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
        <div>
            <h3 class="text-xl font-bold">Daftar Prestasi</h3>
            <p class="text-slate-500 text-sm">Dokumentasi prestasi yang diraih oleh santri dan pondok pesantren.</p>
        </div>
        <button onclick="document.getElementById('add-modal').classList.remove('hidden')" class="px-6 py-3 bg-indigo-600 text-white rounded-2xl text-sm font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-500/30">
            <i class="fas fa-plus mr-2"></i> Tambah Prestasi
        </button>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-slate-50 text-slate-500 text-xs font-bold uppercase tracking-wider">
                <tr>
                    <th class="px-8 py-4">Gambar</th>
                    <th class="px-8 py-4">Nama Prestasi</th>
                    <th class="px-8 py-4">Kategori</th>
                    <th class="px-8 py-4">Tahun</th>
                    <th class="px-8 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($data as $p)
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-4">
                        <div class="w-16 h-12 bg-slate-100 rounded-lg overflow-hidden">
                            @if($p->foto)
                                <img src="{{ asset('storage/' . $p->foto) }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-slate-300">
                                    <i class="fas fa-image"></i>
                                </div>
                            @endif
                        </div>
                    </td>
                    <td class="px-8 py-4">
                        <div class="font-bold text-slate-700">{{ $p->judul }}</div>
                    </td>
                    <td class="px-8 py-4"><span class="px-3 py-1 bg-amber-50 text-amber-600 rounded-full text-[10px] font-bold uppercase">{{ $p->kategori }}</span></td>
                    <td class="px-8 py-4 text-slate-500 text-sm">{{ $p->tahun }}</td>
                    <td class="px-8 py-4">
                        <div class="flex gap-3">
                            <button onclick="editPrestasi({{ json_encode($p) }})" class="text-slate-400 hover:text-indigo-600 transition"><i class="fas fa-edit"></i></button>
                            <form action="{{ route('superadmin.konten.destroy', ['section' => 'prestasi', 'id' => $p->id]) }}" method="POST" onsubmit="return confirm('Hapus data prestasi ini?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-slate-400 hover:text-rose-600 transition"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-8 py-20 text-center text-slate-400 italic">Belum ada data prestasi.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Add -->
<div id="add-modal" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-3xl p-8 max-w-2xl w-full shadow-2xl max-h-[90vh] overflow-y-auto">
        <h3 class="text-2xl font-bold mb-6">Tambah Prestasi Baru</h3>
        <form action="{{ route('superadmin.konten.update', 'prestasi') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold mb-2">Nama Prestasi</label>
                    <input type="text" name="nama_prestasi" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-indigo-600">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2">Kategori</label>
                    <select name="kategori" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-indigo-600">
                        <option value="Akademik">Akademik</option>
                        <option value="Non-Akademik">Non-Akademik</option>
                        <option value="Keagamaan">Keagamaan</option>
                        <option value="Olahraga">Olahraga</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold mb-2">Tahun</label>
                    <input type="number" name="tahun" value="{{ date('Y') }}" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-indigo-600">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2">Gambar Dokumentasi</label>
                    <input type="file" name="gambar" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                </div>
            </div>
            <div>
                <label class="block text-sm font-semibold mb-2">Deskripsi Singkat</label>
                <textarea name="deskripsi" rows="4" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-indigo-600"></textarea>
            </div>
            <div class="pt-4 flex gap-4">
                <button type="button" onclick="document.getElementById('add-modal').classList.add('hidden')" class="flex-grow py-4 bg-slate-100 text-slate-600 font-bold rounded-2xl">Batal</button>
                <button type="submit" class="flex-grow py-4 bg-indigo-600 text-white font-bold rounded-2xl shadow-lg shadow-indigo-500/30">Simpan Data</button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    function editPrestasi(data) {
        const modal = document.getElementById('add-modal');
        const form = modal.querySelector('form');
        const title = modal.querySelector('h3');
        const submitBtn = modal.querySelector('button[type="submit"]');
        
        title.innerText = 'Edit Prestasi';
        submitBtn.innerText = 'Simpan Perubahan';
        
        let idField = form.querySelector('input[name="id"]');
        if (!idField) {
            idField = document.createElement('input');
            idField.type = 'hidden';
            idField.name = 'id';
            form.appendChild(idField);
        }
        
        idField.value = data.id;
        form.querySelector('input[name="nama_prestasi"]').value = data.judul;
        form.querySelector('select[name="kategori"]').value = data.kategori;
        form.querySelector('input[name="tahun"]').value = data.tahun;
        form.querySelector('textarea[name="deskripsi"]').value = data.deskripsi;
        
        modal.classList.remove('hidden');
    }

    document.querySelector('button[onclick*="add-modal"]').addEventListener('click', () => {
        const modal = document.getElementById('add-modal');
        const form = modal.querySelector('form');
        const title = modal.querySelector('h3');
        const submitBtn = modal.querySelector('button[type="submit"]');
        
        title.innerText = 'Tambah Prestasi Baru';
        submitBtn.innerText = 'Simpan Data';
        
        const idField = form.querySelector('input[name="id"]');
        if (idField) idField.remove();
        
        form.reset();
    });
</script>
@endpush
@endsection
