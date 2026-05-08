<a href="{{ route('tendik.dashboard') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('tendik.dashboard') ? 'bg-indigo-600/10 text-indigo-400 font-medium' : 'text-slate-400 hover:text-white hover:bg-slate-800' }} rounded-xl transition">
    <i class="fas fa-home"></i>
    <span>Beranda</span>
</a>

<div class="pt-4 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Tugas Seleksi</div>

<a href="{{ route('tendik.tugas.index') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('tendik.tugas.index') && !request()->has('status') ? 'bg-indigo-600/10 text-indigo-400 font-medium' : 'text-slate-400 hover:text-white hover:bg-slate-800' }} rounded-xl transition">
    <i class="fas fa-calendar-alt"></i>
    <span>Jadwal Tugas</span>
</a>

<a href="{{ route('tendik.tugas.index') }}?status=pending" class="flex items-center gap-3 px-4 py-3 {{ request()->query('status') == 'pending' ? 'bg-indigo-600/10 text-indigo-400 font-medium' : 'text-slate-400 hover:text-white hover:bg-slate-800' }} rounded-xl transition">
    <i class="fas fa-pen-nib"></i>
    <span>Input Nilai</span>
</a>
