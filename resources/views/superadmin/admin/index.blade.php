@extends('layouts.dashboard')

@section('title', 'Manajemen Admin')
@section('page-title', 'Daftar Akun Admin')

@section('sidebar-menu')
    @include('partials.sidebar-superadmin')
@endsection

@section('content')
<div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
    <div class="p-6 border-b border-slate-100 flex justify-between items-center">
        <h3 class="text-lg font-bold">Data Admin Jenjang</h3>
        <button onclick="document.getElementById('add-modal').classList.remove('hidden')" class="px-4 py-2 bg-indigo-600 text-white rounded-lg text-sm font-bold hover:bg-indigo-700 transition">
            <i class="fas fa-plus mr-2"></i> Tambah Admin
        </button>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-slate-50 text-slate-500 text-xs font-bold uppercase tracking-wider">
                <tr>
                    <th class="px-6 py-4">Nama</th>
                    <th class="px-6 py-4">Email</th>
                    <th class="px-6 py-4">Jenjang</th>
                    <th class="px-6 py-4">NIP</th>
                    <th class="px-6 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @foreach($admins as $admin)
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-4 font-medium text-slate-700">{{ $admin->nama }}</td>
                    <td class="px-6 py-4 text-slate-600">{{ $admin->email }}</td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 bg-indigo-50 text-indigo-600 rounded-full text-xs font-bold">{{ $admin->jenjang }}</span>
                    </td>
                    <td class="px-6 py-4 text-slate-600">{{ $admin->nip ?? '-' }}</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            <button onclick="openEditModal({{ json_encode($admin) }})" class="text-slate-400 hover:text-indigo-600 transition"><i class="fas fa-edit"></i></button>
                            <form action="{{ route('superadmin.admin.destroy', $admin->id) }}" method="POST" onsubmit="return confirm('Hapus akun ini?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-slate-400 hover:text-rose-600 transition"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Add -->
<div id="add-modal" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-3xl p-8 max-w-lg w-full shadow-2xl">
        <h3 class="text-xl font-bold mb-6">Tambah Admin Baru</h3>
        <form action="{{ route('superadmin.admin.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-semibold mb-1">Nama Lengkap</label>
                <input type="text" name="nama" required class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-1">Email</label>
                <input type="email" name="email" required class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-1">Password</label>
                <input type="password" name="password" required class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg">
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-semibold mb-1">Jenjang</label>
                    <select name="jenjang" required class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg">
                        <option value="PAUD">PAUD</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">NIP (Opsional)</label>
                    <input type="text" name="nip" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg">
                </div>
            </div>
            <div class="pt-4 flex gap-3">
                <button type="button" onclick="document.getElementById('add-modal').classList.add('hidden')" class="flex-grow py-3 bg-slate-100 text-slate-600 font-bold rounded-xl">Batal</button>
                <button type="submit" class="flex-grow py-3 bg-indigo-600 text-white font-bold rounded-xl shadow-lg shadow-indigo-500/30">Simpan Akun</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit -->
<div id="edit-modal" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-3xl p-8 max-w-lg w-full shadow-2xl">
        <h3 class="text-xl font-bold mb-6">Edit Admin</h3>
        <form id="edit-form" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-sm font-semibold mb-1">Nama Lengkap</label>
                <input type="text" name="nama" id="edit-nama" required class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-1">Email</label>
                <input type="email" name="email" id="edit-email" required class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-1">Password (Kosongkan jika tidak diubah)</label>
                <input type="password" name="password" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg">
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-semibold mb-1">Jenjang</label>
                    <select name="jenjang" id="edit-jenjang" required class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg">
                        <option value="PAUD">PAUD</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">NIP (Opsional)</label>
                    <input type="text" name="nip" id="edit-nip" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg">
                </div>
            </div>
            <div class="pt-4 flex gap-3">
                <button type="button" onclick="document.getElementById('edit-modal').classList.add('hidden')" class="flex-grow py-3 bg-slate-100 text-slate-600 font-bold rounded-xl">Batal</button>
                <button type="submit" class="flex-grow py-3 bg-indigo-600 text-white font-bold rounded-xl shadow-lg shadow-indigo-500/30">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>

<script>
function openEditModal(admin) {
    const modal = document.getElementById('edit-modal');
    const form = document.getElementById('edit-form');
    
    // Set form action dynamically
    form.action = `/superadmin/admin/${admin.id}`;
    
    // Set input values
    document.getElementById('edit-nama').value = admin.nama;
    document.getElementById('edit-email').value = admin.email;
    document.getElementById('edit-jenjang').value = admin.jenjang;
    document.getElementById('edit-nip').value = admin.nip || '';
    
    modal.classList.remove('hidden');
}
</script>
@endsection