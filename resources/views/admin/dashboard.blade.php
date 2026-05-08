@extends('layouts.dashboard')

@section('title', 'Admin Dashboard')
@section('page-title', 'Dashboard Admin Jenjang ' . Auth::user()->jenjang)

@section('sidebar-menu')
    @include('partials.sidebar-admin')
@endsection

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
        <h3 class="text-slate-500 text-sm font-medium">Pendaftar Jenjang {{ Auth::user()->jenjang }}</h3>
        <p class="text-3xl font-bold mt-1 text-slate-800">{{ $total_pendaftar ?? 0 }}</p>
    </div>
    <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
        <h3 class="text-slate-500 text-sm font-medium">Lulus Seleksi Tahap Awal</h3>
        <p class="text-3xl font-bold mt-1 text-slate-800">{{ $lulus_administrasi ?? 0 }}</p>
    </div>
    <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
        <h3 class="text-slate-500 text-sm font-medium">Diterima Akhir</h3>
        <p class="text-3xl font-bold mt-1 text-slate-800">{{ $total_lulus ?? 0 }}</p>
    </div>
</div>

<div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
    <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm">
        <h3 class="text-lg font-bold mb-6">Aksi Cepat</h3>
        <div class="grid grid-cols-2 gap-4">
            <a href="{{ route('admin.pendaftar.index') }}" class="p-4 bg-slate-50 rounded-xl border border-slate-100 hover:border-indigo-200 transition text-center group">
                <i class="fas fa-users text-2xl text-slate-400 group-hover:text-indigo-600 mb-2"></i>
                <div class="text-sm font-semibold text-slate-700">Lihat Pendaftar</div>
            </a>
            <button onclick="openUmumkanTahap('administrasi')" class="p-4 bg-slate-50 rounded-xl border border-slate-100 hover:border-indigo-200 transition text-center group">
                <i class="fas fa-file-alt text-2xl text-slate-400 group-hover:text-indigo-600 mb-2"></i>
                <div class="text-sm font-semibold text-slate-700">Umumkan Administrasi</div>
            </button>
            <button onclick="openUmumkanTahap('akademik')" class="p-4 bg-slate-50 rounded-xl border border-slate-100 hover:border-indigo-200 transition text-center group">
                <i class="fas fa-book text-2xl text-slate-400 group-hover:text-indigo-600 mb-2"></i>
                <div class="text-sm font-semibold text-slate-700">Umumkan Akademik</div>
            </button>
            <button onclick="openUmumkanTahap('wawancara')" class="p-4 bg-slate-50 rounded-xl border border-slate-100 hover:border-indigo-200 transition text-center group">
                <i class="fas fa-comments text-2xl text-slate-400 group-hover:text-indigo-600 mb-2"></i>
                <div class="text-sm font-semibold text-slate-700">Umumkan Wawancara</div>
            </button>
            <button onclick="openUmumkanTahap('alquran')" class="p-4 bg-slate-50 rounded-xl border border-slate-100 hover:border-indigo-200 transition text-center group">
                <i class="fas fa-quran text-2xl text-slate-400 group-hover:text-indigo-600 mb-2"></i>
                <div class="text-sm font-semibold text-slate-700">Umumkan Al-Quran</div>
            </button>
            <button onclick="document.getElementById('umumkankan-modal').classList.remove('hidden')" class="p-4 bg-indigo-50 rounded-xl border border-indigo-100 hover:border-indigo-200 transition text-center group">
                <i class="fas fa-bullhorn text-2xl text-indigo-400 group-hover:text-indigo-600 mb-2"></i>
                <div class="text-sm font-semibold text-indigo-700">Hasil Akhir</div>
            </button>
        </div>
    </div>

    <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm">
        <h3 class="text-lg font-bold mb-6">Status Pengumuman</h3>
        <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 rounded-xl {{ $is_announced ? 'bg-emerald-50 text-emerald-700' : 'bg-amber-50 text-amber-700' }}">
                <i class="fas {{ $is_announced ? 'fa-check-circle' : 'fa-clock' }} text-2xl"></i>
                <div>
                    <div class="font-bold">Hasil Akhir: {{ $is_announced ? 'Diumumkan' : 'Belum' }}</div>
                    <div class="text-xs opacity-80">{{ $is_announced ? 'Sudah diakses publik' : 'Masih penilaian' }}</div>
                </div>
            </div>
            
            <div class="grid grid-cols-2 gap-2">
                <div class="p-3 rounded-lg border {{ $is_announced_administrasi ? 'bg-emerald-50 border-emerald-100 text-emerald-700' : 'bg-slate-50 border-slate-100 text-slate-500' }} text-center">
                    <div class="text-[10px] font-bold uppercase">Administrasi</div>
                    <i class="fas {{ $is_announced_administrasi ? 'fa-check' : 'fa-minus' }} text-xs mt-1"></i>
                </div>
                <div class="p-3 rounded-lg border {{ $is_announced_akademik ? 'bg-emerald-50 border-emerald-100 text-emerald-700' : 'bg-slate-50 border-slate-100 text-slate-500' }} text-center">
                    <div class="text-[10px] font-bold uppercase">Akademik</div>
                    <i class="fas {{ $is_announced_akademik ? 'fa-check' : 'fa-minus' }} text-xs mt-1"></i>
                </div>
                <div class="p-3 rounded-lg border {{ $is_announced_wawancara ? 'bg-emerald-50 border-emerald-100 text-emerald-700' : 'bg-slate-50 border-slate-100 text-slate-500' }} text-center">
                    <div class="text-[10px] font-bold uppercase">Wawancara</div>
                    <i class="fas {{ $is_announced_wawancara ? 'fa-check' : 'fa-minus' }} text-xs mt-1"></i>
                </div>
                <div class="p-3 rounded-lg border {{ $is_announced_alquran ? 'bg-emerald-50 border-emerald-100 text-emerald-700' : 'bg-slate-50 border-slate-100 text-slate-500' }} text-center">
                    <div class="text-[10px] font-bold uppercase">Al-Quran</div>
                    <i class="fas {{ $is_announced_alquran ? 'fa-check' : 'fa-minus' }} text-xs mt-1"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Umumkan Akhir -->
<div id="umumkankan-modal" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-3xl p-8 max-w-md w-full shadow-2xl">
        <h3 class="text-xl font-bold mb-4">Umumkan Hasil Akhir?</h3>
        <p class="text-slate-600 mb-6">Tindakan ini akan mempublikasikan hasil kelulusan FINAL ke halaman web profile dan mengirimkan notifikasi email.</p>
        <div class="flex gap-4">
            <button onclick="document.getElementById('umumkankan-modal').classList.add('hidden')" class="flex-grow py-3 bg-slate-100 text-slate-600 font-bold rounded-xl">Batal</button>
            <form action="{{ route('admin.seleksi.umumkan-hasil') }}" method="POST" class="flex-grow">
                @csrf
                <button type="submit" class="w-full py-3 bg-indigo-600 text-white font-bold rounded-xl shadow-lg shadow-indigo-500/30">Ya, Umumkan</button>
            </form>
        </div>
    </div>
</div>

<!-- Modal Umumkan Tahap -->
<div id="umumkan-tahap-modal" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-3xl p-8 max-w-md w-full shadow-2xl">
        <h3 class="text-xl font-bold mb-4">Umumkan Hasil <span id="stage-name-display"></span>?</h3>
        <p class="text-slate-600 mb-6">Mempublikasikan daftar calon pendaftar yang lolos di tahap ini ke website dan mengirim email notifikasi kelulusan tahap.</p>
        <div class="flex gap-4">
            <button onclick="document.getElementById('umumkan-tahap-modal').classList.add('hidden')" class="flex-grow py-3 bg-slate-100 text-slate-600 font-bold rounded-xl">Batal</button>
            <form action="{{ route('admin.seleksi.umumkan-tahap') }}" method="POST" class="flex-grow">
                @csrf
                <input type="hidden" name="stage" id="stage-input">
                <button type="submit" class="w-full py-3 bg-indigo-600 text-white font-bold rounded-xl shadow-lg shadow-indigo-500/30">Ya, Umumkan</button>
            </form>
        </div>
    </div>
</div>

<script>
    function openUmumkanTahap(stage) {
        const stageNames = {
            'administrasi': 'Seleksi Administrasi',
            'akademik': 'Seleksi Akademik',
            'wawancara': 'Seleksi Wawancara',
            'alquran': 'Seleksi Baca Al-Quran'
        };
        document.getElementById('stage-name-display').innerText = stageNames[stage];
        document.getElementById('stage-input').value = stage;
        document.getElementById('umumkan-tahap-modal').classList.remove('hidden');
    }
</script>
@endsection
