@extends('layouts.dashboard')

@section('title', 'Detail Pendaftar')
@section('page-title', 'Detail Calon Santri')

@section('sidebar-menu')
    @include('partials.sidebar-admin')
@endsection

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Main Info -->
    <div class="lg:col-span-2 space-y-8">
        <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm">
            <div class="flex items-center gap-6 mb-8">
                <div class="w-20 h-20 bg-slate-100 rounded-2xl flex items-center justify-center text-3xl text-slate-400">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-slate-800">{{ $pendaftar->nama_lengkap }}</h2>
                    <p class="text-slate-500">Pendaftar Jenjang {{ $jenjang }}</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">Informasi Pribadi</h4>
                    <ul class="space-y-3">
                        <li class="flex justify-between text-sm">
                            <span class="text-slate-500">NISN</span>
                            <span class="font-semibold text-slate-700">{{ $pendaftar->nisn ?? '-' }}</span>
                        </li>
                        <li class="flex justify-between text-sm">
                            <span class="text-slate-500">NIK</span>
                            <span class="font-semibold text-slate-700">{{ $pendaftar->nik ?? '-' }}</span>
                        </li>
                        <li class="flex justify-between text-sm">
                            <span class="text-slate-500">Tempat, Tgl Lahir</span>
                            <span class="font-semibold text-slate-700">{{ $pendaftar->tempat_lahir }}, {{ \Carbon\Carbon::parse($pendaftar->tanggal_lahir)->translatedFormat('d F Y') }}</span>
                        </li>
                        <li class="flex justify-between text-sm">
                            <span class="text-slate-500">Jenis Kelamin</span>
                            <span class="font-semibold text-slate-700">{{ $pendaftar->jenis_kelamin ? 'Laki-laki' : 'Perempuan' }}</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">Informasi Sekolah</h4>
                    <ul class="space-y-3">
                        <li class="flex justify-between text-sm">
                            <span class="text-slate-500">Sekolah Asal</span>
                            <span class="font-semibold text-slate-700">{{ $pendaftar->nama_sekolah_asal ?? '-' }}</span>
                        </li>
                        <li class="flex justify-between text-sm">
                            <span class="text-slate-500">NPSN Sekolah</span>
                            <span class="font-semibold text-slate-700">{{ $pendaftar->npsn_sekolah_asal ?? '-' }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-8 pt-8 border-t border-slate-50">
                <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">Informasi Orang Tua</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <p class="text-xs font-bold text-indigo-600 mb-2 uppercase">Ayah</p>
                        <p class="text-sm font-bold">{{ $pendaftar->nama_ayah }}</p>
                        <p class="text-xs text-slate-500">{{ $pendaftar->pekerjaan_ayah }}</p>
                        <p class="text-xs text-slate-500">{{ $pendaftar->no_hp_ayah }}</p>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-rose-600 mb-2 uppercase">Ibu</p>
                        <p class="text-sm font-bold">{{ $pendaftar->nama_ibu }}</p>
                        <p class="text-xs text-slate-500">{{ $pendaftar->pekerjaan_ibu }}</p>
                        <p class="text-xs text-slate-500">{{ $pendaftar->no_hp_ibu }}</p>
                    </div>
                </div>
            </div>

            <div class="mt-8 pt-8 border-t border-slate-100">
                <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">Berkas Dokumen</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @php
                        $berkas = [
                            'Akta Kelahiran' => $pendaftar->file_akta_lahir,
                            'Kartu Keluarga' => $pendaftar->file_kk,
                            'NISN' => $pendaftar->file_nisn,
                            'KTP Ayah' => $pendaftar->file_ktp_ayah,
                            'KTP Ibu' => $pendaftar->file_ktp_ibu,
                            'Rapor' => $pendaftar->file_rapor,
                            'Piagam' => $pendaftar->file_prestasi,
                            'Ijazah' => $pendaftar->file_ijazah,
                            'Bukti Pembayaran' => $pendaftar->file_bukti_bayar,
                        ];
                    @endphp

                    @foreach($berkas as $label => $path)
                        @if($path)
                            <a href="{{ asset('storage/' . $path) }}" target="_blank" class="flex items-center gap-3 p-4 bg-slate-50 rounded-2xl border border-slate-100 hover:border-indigo-200 hover:bg-indigo-50/30 transition-all group">
                                <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center text-indigo-600 shadow-sm group-hover:scale-110 transition-transform">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-slate-700">{{ $label }}</p>
                                    <p class="text-[10px] text-slate-400 uppercase">Lihat Dokumen</p>
                                </div>
                            </a>
                        @else
                            <div class="flex items-center gap-3 p-4 bg-slate-50/50 rounded-2xl border border-slate-50 opacity-60">
                                <div class="w-10 h-10 bg-slate-100 rounded-xl flex items-center justify-center text-slate-300">
                                    <i class="fas fa-times"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-slate-400">{{ $label }}</p>
                                    <p class="text-[10px] text-slate-300 uppercase">Tidak Ada</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Selection Status & Actions -->
    <div class="space-y-8">
        <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm">
            <h3 class="text-lg font-bold mb-6">Status Seleksi</h3>
            
            <div class="space-y-6">
                <!-- Administrasi -->
                <div class="relative pl-8 pb-6 border-l-2 border-slate-100 last:border-0 last:pb-0">
                    <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full {{ isset($seleksi->status_administrasi) ? ($seleksi->status_administrasi ? 'bg-emerald-500' : 'bg-rose-500') : 'bg-slate-200' }}"></div>
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-bold">Administrasi</p>
                            <p class="text-xs text-slate-500">
                                @if(isset($seleksi->status_administrasi))
                                    {{ $seleksi->status_administrasi ? 'Lulus' : 'Tidak Lulus' }}
                                @else
                                    Belum Dinilai
                                @endif
                            </p>
                        </div>
                        <button onclick="openModal('administrasi')" class="text-indigo-600 text-xs font-bold hover:underline">Edit</button>
                    </div>
                </div>

                <!-- Akademik -->
                <div class="relative pl-8 pb-6 border-l-2 border-slate-100 last:border-0 last:pb-0">
                    <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full {{ isset($seleksi->status_akademik) ? ($seleksi->status_akademik ? 'bg-emerald-500' : 'bg-rose-500') : 'bg-slate-200' }}"></div>
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-bold">Akademik</p>
                            <p class="text-xs text-slate-500">
                                @if(isset($seleksi->status_akademik))
                                    Nilai: {{ $seleksi->nilai_akademik }}
                                @elseif(isset($seleksi->jadwal_akademik))
                                    Jadwal: {{ \Carbon\Carbon::parse($seleksi->jadwal_akademik)->format('d M Y H:i') }}
                                @else
                                    Belum Dinilai
                                @endif
                            </p>
                        </div>
                        <button onclick="openModal('akademik')" class="text-indigo-600 text-xs font-bold hover:underline">Setup</button>
                    </div>
                </div>

                <!-- Wawancara -->
                <div class="relative pl-8 pb-6 border-l-2 border-slate-100 last:border-0 last:pb-0">
                    <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full {{ isset($seleksi->status_wawancara) ? ($seleksi->status_wawancara ? 'bg-emerald-500' : 'bg-rose-500') : 'bg-slate-200' }}"></div>
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-bold">Wawancara</p>
                            <p class="text-xs text-slate-500">
                                @if(isset($seleksi->status_wawancara))
                                    Nilai: {{ $seleksi->nilai_wawancara }}
                                @elseif(isset($seleksi->jadwal_wawancara))
                                    Jadwal: {{ \Carbon\Carbon::parse($seleksi->jadwal_wawancara)->format('d M Y H:i') }}
                                @else
                                    Belum Dinilai
                                @endif
                            </p>
                        </div>
                        <button onclick="openModal('wawancara')" class="text-indigo-600 text-xs font-bold hover:underline">Setup</button>
                    </div>
                </div>

                <!-- Baca Al-Quran -->
                <div class="relative pl-8 pb-6 border-l-2 border-slate-100 last:border-0 last:pb-0">
                    <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full {{ isset($seleksi->status_alquran) ? ($seleksi->status_alquran ? 'bg-emerald-500' : 'bg-rose-500') : 'bg-slate-200' }}"></div>
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-bold">Baca Al-Quran</p>
                            <p class="text-xs text-slate-500">
                                @if(isset($seleksi->status_alquran))
                                    Nilai: {{ $seleksi->nilai_alquran }}
                                @elseif(isset($seleksi->jadwal_alquran))
                                    Jadwal: {{ \Carbon\Carbon::parse($seleksi->jadwal_alquran)->format('d M Y H:i') }}
                                @else
                                    Belum Dinilai
                                @endif
                            </p>
                        </div>
                        <button onclick="openModal('alquran')" class="text-indigo-600 text-xs font-bold hover:underline">Setup</button>
                    </div>
                </div>

                <!-- Hasil Akhir -->
                @if(isset($seleksi->status_kelulusan))
                <div class="relative pl-8 pt-6 border-t border-slate-100 mt-4">
                    <div class="flex justify-between items-center bg-slate-50 p-4 rounded-2xl border border-slate-100">
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Hasil Akhir</p>
                            <p class="text-lg font-bold {{ $seleksi->status_kelulusan ? 'text-emerald-600' : 'text-rose-600' }}">
                                {{ $seleksi->status_kelulusan ? 'LULUS' : 'TIDAK LULUS' }}
                            </p>
                        </div>
                        <div class="w-12 h-12 rounded-full {{ $seleksi->status_kelulusan ? 'bg-emerald-100 text-emerald-600' : 'bg-rose-100 text-rose-600' }} flex items-center justify-center text-xl">
                            <i class="fas {{ $seleksi->status_kelulusan ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Modal Administrasi -->
<div id="modal-administrasi" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-3xl p-8 max-w-md w-full shadow-2xl">
        <h3 class="text-xl font-bold mb-6">Input Hasil Administrasi</h3>
        <form action="{{ route('admin.seleksi.administrasi', $pendaftar->id) }}" method="POST" class="space-y-4">
            @csrf @method('PUT')
            <div>
                <label class="block text-sm font-semibold mb-2">Nilai Administrasi</label>
                <input type="number" step="0.01" name="nilai_administrasi" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg" value="{{ $seleksi->nilai_administrasi ?? '' }}">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-2">Status</label>
                <select name="status_administrasi" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg">
                    <option value="1" {{ (isset($seleksi->status_administrasi) && $seleksi->status_administrasi == 1) ? 'selected' : '' }}>Lulus</option>
                    <option value="0" {{ (isset($seleksi->status_administrasi) && $seleksi->status_administrasi == 0) ? 'selected' : '' }}>Tidak Lulus</option>
                </select>
            </div>
            <div class="pt-4 flex gap-3">
                <button type="button" onclick="closeModal('administrasi')" class="flex-grow py-3 bg-slate-100 text-slate-600 font-bold rounded-xl">Batal</button>
                <button type="submit" class="flex-grow py-3 bg-indigo-600 text-white font-bold rounded-xl shadow-lg shadow-indigo-500/30">Simpan Hasil</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Akademik -->
<div id="modal-akademik" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-3xl p-8 max-w-md w-full shadow-2xl">
        <h3 class="text-xl font-bold mb-6">Setup Seleksi Akademik</h3>
        <form action="{{ route('admin.seleksi.setup-akademik', $pendaftar->id) }}" method="POST" class="space-y-4">
            @csrf @method('PUT')
            <div>
                <label class="block text-sm font-semibold mb-2">Jadwal Seleksi</label>
                <input type="datetime-local" name="jadwal_akademik" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg" value="{{ isset($seleksi->jadwal_akademik) ? date('Y-m-d\TH:i', strtotime($seleksi->jadwal_akademik)) : '' }}">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-2">Link G-Form (Ujian)</label>
                <input type="url" name="link_gform" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg" value="{{ $seleksi->link_gform ?? '' }}">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-2">Link G-Meet (Monitoring)</label>
                <input type="url" name="link_gmeet_akademik" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg" value="{{ $seleksi->link_gmeet_akademik ?? '' }}">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-2">Penanggung Jawab (Tendik)</label>
                <select name="id_tendik_akademik" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg">
                    <option value="">Pilih Tendik</option>
                    @foreach($tendik as $t)
                        <option value="{{ $t->id }}" {{ (isset($seleksi->id_tendik_akademik) && $seleksi->id_tendik_akademik == $t->id) ? 'selected' : '' }}>{{ $t->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="pt-4 flex gap-3">
                <button type="button" onclick="closeModal('akademik')" class="flex-grow py-3 bg-slate-100 text-slate-600 font-bold rounded-xl">Batal</button>
                <button type="submit" class="flex-grow py-3 bg-indigo-600 text-white font-bold rounded-xl shadow-lg shadow-indigo-500/30">Simpan Setup</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Wawancara -->
<div id="modal-wawancara" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-3xl p-8 max-w-md w-full shadow-2xl">
        <h3 class="text-xl font-bold mb-6">Setup Seleksi Wawancara</h3>
        <form action="{{ route('admin.seleksi.setup-wawancara', $pendaftar->id) }}" method="POST" class="space-y-4">
            @csrf @method('PUT')
            <div>
                <label class="block text-sm font-semibold mb-2">Jadwal Wawancara</label>
                <input type="datetime-local" name="jadwal_wawancara" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg" value="{{ isset($seleksi->jadwal_wawancara) ? date('Y-m-d\TH:i', strtotime($seleksi->jadwal_wawancara)) : '' }}">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-2">Link G-Meet</label>
                <input type="url" name="link_gmeet_wawancara" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg" value="{{ $seleksi->link_gmeet_wawancara ?? '' }}">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-2">Pewawancara (Tendik)</label>
                <select name="id_tendik_wawancara" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg">
                    <option value="">Pilih Tendik</option>
                    @foreach($tendik as $t)
                        <option value="{{ $t->id }}" {{ (isset($seleksi->id_tendik_wawancara) && $seleksi->id_tendik_wawancara == $t->id) ? 'selected' : '' }}>{{ $t->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="pt-4 flex gap-3">
                <button type="button" onclick="closeModal('wawancara')" class="flex-grow py-3 bg-slate-100 text-slate-600 font-bold rounded-xl">Batal</button>
                <button type="submit" class="flex-grow py-3 bg-indigo-600 text-white font-bold rounded-xl shadow-lg shadow-indigo-500/30">Simpan Setup</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Al-Quran -->
<div id="modal-alquran" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-3xl p-8 max-w-md w-full shadow-2xl">
        <h3 class="text-xl font-bold mb-6">Setup Seleksi Baca Al-Quran</h3>
        <form action="{{ route('admin.setup-alquran', $pendaftar->id) }}" method="POST" class="space-y-4">
            @csrf @method('PUT')
            <div>
                <label class="block text-sm font-semibold mb-2">Jadwal Seleksi</label>
                <input type="datetime-local" name="jadwal_alquran" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg" value="{{ isset($seleksi->jadwal_alquran) ? date('Y-m-d\TH:i', strtotime($seleksi->jadwal_alquran)) : '' }}">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-2">Link G-Meet</label>
                <input type="url" name="link_gmeet_alquran" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg" value="{{ $seleksi->link_gmeet_alquran ?? '' }}">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-2">Penguji (Tendik)</label>
                <select name="id_tendik_alquran" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg">
                    <option value="">Pilih Tendik</option>
                    @foreach($tendik as $t)
                        <option value="{{ $t->id }}" {{ (isset($seleksi->id_tendik_alquran) && $seleksi->id_tendik_alquran == $t->id) ? 'selected' : '' }}>{{ $t->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="pt-4 flex gap-3">
                <button type="button" onclick="closeModal('alquran')" class="flex-grow py-3 bg-slate-100 text-slate-600 font-bold rounded-xl">Batal</button>
                <button type="submit" class="flex-grow py-3 bg-indigo-600 text-white font-bold rounded-xl shadow-lg shadow-indigo-500/30">Simpan Setup</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openModal(id) {
        document.getElementById('modal-' + id).classList.remove('hidden');
    }
    function closeModal(id) {
        document.getElementById('modal-' + id).classList.add('hidden');
    }
</script>
@endsection
