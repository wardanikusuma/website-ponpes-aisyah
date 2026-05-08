<a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('admin.dashboard') ? 'bg-indigo-600/10 text-indigo-400' : 'text-slate-400 hover:text-white hover:bg-slate-800' }} rounded-xl transition font-medium">
    <i class="fas fa-home"></i>
    <span>Beranda</span>
</a>

<div class="pt-4 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Penerimaan Peserta</div>
<a href="{{ route('admin.pendaftar.index') }}" class="flex items-center gap-3 px-4 py-3 {{ (request()->routeIs('admin.pendaftar.*') && !request()->has('step')) ? 'bg-indigo-600/10 text-indigo-400' : 'text-slate-400 hover:text-white hover:bg-slate-800' }} rounded-xl transition font-medium">
    <i class="fas fa-users"></i>
    <span>Data Pendaftar</span>
</a>

<!-- <div class="pt-4 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Tahapan Seleksi</div>
<a href="{{ route('admin.pendaftar.index') }}?step=administrasi" class="flex items-center gap-3 px-4 py-3 {{ request()->get('step') == 'administrasi' ? 'bg-indigo-600/10 text-indigo-400' : 'text-slate-400 hover:text-white hover:bg-slate-800' }} rounded-xl transition font-medium">
    <i class="fas fa-file-invoice"></i>
    <span>Administrasi</span>
</a>
<a href="{{ route('admin.pendaftar.index') }}?step=akademik" class="flex items-center gap-3 px-4 py-3 {{ request()->get('step') == 'akademik' ? 'bg-indigo-600/10 text-indigo-400' : 'text-slate-400 hover:text-white hover:bg-slate-800' }} rounded-xl transition font-medium">
    <i class="fas fa-book-reader"></i>
    <span>Akademik</span>
</a>
<a href="{{ route('admin.pendaftar.index') }}?step=wawancara" class="flex items-center gap-3 px-4 py-3 {{ request()->get('step') == 'wawancara' ? 'bg-indigo-600/10 text-indigo-400' : 'text-slate-400 hover:text-white hover:bg-slate-800' }} rounded-xl transition font-medium">
    <i class="fas fa-comments"></i>
    <span>Wawancara</span>
</a>
<a href="{{ route('admin.pendaftar.index') }}?step=alquran" class="flex items-center gap-3 px-4 py-3 {{ request()->get('step') == 'alquran' ? 'bg-indigo-600/10 text-indigo-400' : 'text-slate-400 hover:text-white hover:bg-slate-800' }} rounded-xl transition font-medium">
    <i class="fas fa-quran"></i>
    <span>Tes Al-Quran</span>
</a> -->

<div class="pt-4 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Hasil & Laporan</div>
<a href="{{ route('admin.pendaftar.index') }}?step=final" class="flex items-center gap-3 px-4 py-3 {{ request()->get('step') == 'final' ? 'bg-indigo-600/10 text-indigo-400' : 'text-slate-400 hover:text-white hover:bg-slate-800' }} rounded-xl transition font-medium">
    <i class="fas fa-trophy"></i>
    <span>Hasil Akhir</span>
</a>
<a href="{{ route('admin.laporan.generate') }}" target="_blank" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white hover:bg-slate-800 rounded-xl transition font-medium">
    <i class="fas fa-file-pdf"></i>
    <span>Cetak Laporan</span>
</a>
