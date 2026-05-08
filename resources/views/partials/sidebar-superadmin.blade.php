<a href="{{ route('superadmin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('superadmin.dashboard') ? 'bg-indigo-600/10 text-indigo-400' : 'text-slate-400 hover:text-white hover:bg-slate-800' }} rounded-xl transition font-medium">
    <i class="fas fa-home"></i>
    <span>Beranda</span>
</a>

<div class="pt-4 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Manajemen Akun</div>
<a href="{{ route('superadmin.admin.index') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('superadmin.admin.*') ? 'bg-indigo-600/10 text-indigo-400' : 'text-slate-400 hover:text-white hover:bg-slate-800' }} rounded-xl transition font-medium">
    <i class="fas fa-user-shield"></i>
    <span>Data Admin</span>
</a>
<a href="{{ route('superadmin.tendik.index') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('superadmin.tendik.*') ? 'bg-indigo-600/10 text-indigo-400' : 'text-slate-400 hover:text-white hover:bg-slate-800' }} rounded-xl transition font-medium">
    <i class="fas fa-user-tie"></i>
    <span>Data Tendik</span>
</a>

<div class="pt-4 pb-2 px-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Konten Web</div>
<a href="{{ route('superadmin.konten.edit', 'yayasan') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->is('superadmin/konten/yayasan') ? 'bg-indigo-600/10 text-indigo-400' : 'text-slate-400 hover:text-white hover:bg-slate-800' }} rounded-xl transition font-medium">
    <i class="fas fa-building"></i>
    <span>Profil Yayasan</span>
</a>
<a href="{{ route('superadmin.konten.edit', 'berita') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->is('superadmin/konten/berita') ? 'bg-indigo-600/10 text-indigo-400' : 'text-slate-400 hover:text-white hover:bg-slate-800' }} rounded-xl transition font-medium">
    <i class="fas fa-newspaper"></i>
    <span>Berita & Artikel</span>
</a>
<a href="{{ route('superadmin.konten.edit', 'prestasi') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->is('superadmin/konten/prestasi') ? 'bg-indigo-600/10 text-indigo-400' : 'text-slate-400 hover:text-white hover:bg-slate-800' }} rounded-xl transition font-medium">
    <i class="fas fa-trophy"></i>
    <span>Prestasi</span>
</a>
<a href="{{ route('superadmin.konten.edit', 'eskul') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->is('superadmin/konten/eskul') ? 'bg-indigo-600/10 text-indigo-400' : 'text-slate-400 hover:text-white hover:bg-slate-800' }} rounded-xl transition font-medium">
    <i class="fas fa-basketball-ball"></i>
    <span>Ekstrakurikuler</span>
</a>
<a href="{{ route('superadmin.konten.edit', 'kurikulum') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->is('superadmin/konten/kurikulum') ? 'bg-indigo-600/10 text-indigo-400' : 'text-slate-400 hover:text-white hover:bg-slate-800' }} rounded-xl transition font-medium">
    <i class="fas fa-book"></i>
    <span>Kurikulum</span>
</a>
<a href="{{ route('superadmin.konten.edit', 'umum') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->is('superadmin/konten/umum') ? 'bg-indigo-600/10 text-indigo-400' : 'text-slate-400 hover:text-white hover:bg-slate-800' }} rounded-xl transition font-medium">
    <i class="fas fa-info-circle"></i>
    <span>Informasi Umum</span>
</a>
