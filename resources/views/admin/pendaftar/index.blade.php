@extends('layouts.dashboard')

@section('title', 'Data Pendaftar')
@section('page-title', 'Pendaftar ' . $jenjang)

@section('sidebar-menu')
    @include('partials.sidebar-admin')
@endsection

@section('content')
<div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
    <div class="p-6 border-b border-slate-100 flex justify-between items-center">
        <h3 class="text-lg font-bold">
            @if($step)
                Seleksi {{ ucfirst($step) }}
            @else
                Seluruh Pendaftar
            @endif
        </h3>
        <div class="flex gap-2">
            <button onclick="openBulkModal()" class="px-4 py-2 bg-indigo-600 text-white rounded-lg text-sm font-bold shadow-lg shadow-indigo-500/20 hover:bg-indigo-700 transition">
                <i class="fas fa-magic mr-2"></i> Setup
            </button>
            <input type="text" placeholder="Cari nama/NISN..." class="px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500/20">
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-slate-50 text-slate-500 text-xs font-bold uppercase tracking-wider">
                <tr>
                    <th class="px-6 py-4">
                        <input type="checkbox" id="select-all" class="rounded text-indigo-600 focus:ring-indigo-500">
                    </th>
                    <th class="px-6 py-4">No.</th>
                    <th class="px-6 py-4">Nama Lengkap</th>
                    <th class="px-6 py-4">NISN/NIK</th>
                    <th class="px-6 py-4">Sekolah Asal</th>
                    <th class="px-6 py-4">Status Terakhir</th>
                    <th class="px-6 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($pendaftars as $index => $p)
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-4 text-slate-500 text-sm">
                        <input type="checkbox" name="selected_pendaftar" value="{{ $p->id }}" class="pendaftar-checkbox rounded text-indigo-600 focus:ring-indigo-500">
                    </td>
                    <td class="px-6 py-4 text-slate-500 text-sm">{{ $index + 1 }}</td>
                    <td class="px-6 py-4">
                        <div class="font-bold text-slate-700">{{ $p->nama_lengkap }}</div>
                        <div class="text-xs text-slate-500">{{ $p->email }}</div>
                    </td>
                    <td class="px-6 py-4 text-slate-600 text-sm">
                        {{ $p->nisn ?? $p->nik }}
                    </td>
                    <td class="px-6 py-4 text-slate-600 text-sm">
                        {{ $p->nama_sekolah_asal ?? '-' }}
                    </td>
                    <td class="px-6 py-4">
                        @if(!$p->seleksi)
                            <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-full text-[10px] font-bold uppercase">
                                Belum Terdata
                            </span>
                        @elseif($p->seleksi->status_kelulusan == 1)
                            <span class="px-3 py-1 bg-emerald-100 text-emerald-600 rounded-full text-[10px] font-bold uppercase">
                                Lulus Akhir
                            </span>
                        @elseif($p->seleksi->status_kelulusan === 0)
                            <span class="px-3 py-1 bg-rose-100 text-rose-600 rounded-full text-[10px] font-bold uppercase">
                                Tidak Lulus
                            </span>
                        @elseif($p->seleksi->nilai_alquran !== null)
                            <span class="px-3 py-1 bg-teal-100 text-teal-600 rounded-full text-[10px] font-bold uppercase">
                                Al-Quran Selesai
                            </span>
                        @elseif($p->seleksi->nilai_wawancara !== null)
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-[10px] font-bold uppercase">
                                Wawancara Selesai
                            </span>
                        @elseif($p->seleksi->nilai_akademik !== null)
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-[10px] font-bold uppercase">
                                Akademik Selesai
                            </span>
                        @elseif($p->seleksi->status_administrasi == 1)
                            <span class="px-3 py-1 bg-amber-100 text-amber-600 rounded-full text-[10px] font-bold uppercase">
                                Lulus Administrasi
                            </span>
                        @else
                            <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-full text-[10px] font-bold uppercase">
                                Belum Dinilai
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('admin.pendaftar.show', $p->id) }}" class="text-indigo-600 hover:text-indigo-800 font-bold text-sm">
                            Detail <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-6 py-10 text-center text-slate-400 italic">Belum ada pendaftar</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</div>

<!-- Bulk Setup Modal -->
<div id="bulk-setup-modal" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-3xl p-8 max-w-lg w-full shadow-2xl">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-xl font-bold">Setup Massal Tahapan Seleksi</h3>
            <button onclick="closeBulkModal()" class="text-slate-400 hover:text-slate-600"><i class="fas fa-times"></i></button>
        </div>
        
        <form id="bulk-form" action="{{ route('admin.seleksi.bulk-setup') }}" method="POST" class="space-y-4">
            @csrf
            <div id="selected-ids-container"></div>
            <div>
                <label class="block text-sm font-semibold mb-2">Terpilih: <span id="selected-count" class="text-indigo-600">0</span> Orang</label>
                <label class="block text-sm font-semibold mb-2">Pilih Tahapan</label>
                <select name="stage" id="bulk-stage-select" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg" onchange="toggleBulkFields()">
                    <option value="akademik">Seleksi Akademik</option>
                    <option value="wawancara">Seleksi Wawancara</option>
                    <option value="alquran">Seleksi Baca Al-Quran</option>
                </select>
            </div>

            <div id="bulk-common-fields">
                <div>
                    <label class="block text-sm font-semibold mb-2">Jadwal Seleksi (Massal)</label>
                    <input type="datetime-local" name="jadwal_akademik" id="bulk-jadwal" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg">
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-semibold mb-2">Link G-Meet (Massal)</label>
                    <input type="url" name="link_gmeet_akademik" id="bulk-gmeet" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg" placeholder="https://meet.google.com/xxx-xxxx-xxx">
                </div>
                <div class="mt-4" id="bulk-gform-wrapper">
                    <label class="block text-sm font-semibold mb-2">Link G-Form (Ujian)</label>
                    <input type="url" name="link_gform" id="bulk-gform" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg" placeholder="https://forms.gle/xxxx">
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-semibold mb-2">Penanggung Jawab (Tendik)</label>
                    <select name="id_tendik_akademik" id="bulk-tendik" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg">
                        <option value="">Pilih Tendik</option>
                        @foreach($tendik as $t)
                            <option value="{{ $t->id }}">{{ $t->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="pt-6">
                <p class="text-[10px] text-indigo-600 mb-4 bg-indigo-50 p-3 rounded-lg border border-indigo-100 italic">
                    *Tindakan ini akan mengupdate jadwal dan link HANYA untuk pendaftar yang Anda pilih. Email undangan seleksi akan otomatis dikirimkan ke pendaftar terpilih.
                </p>
                <div class="flex gap-3">
                    <button type="button" onclick="closeBulkModal()" class="flex-grow py-3 bg-slate-100 text-slate-600 font-bold rounded-xl">Batal</button>
                    <button type="submit" class="flex-grow py-3 bg-indigo-600 text-white font-bold rounded-xl shadow-lg shadow-indigo-500/30">Terapkan Massal</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function openBulkModal() {
        const selected = document.querySelectorAll('.pendaftar-checkbox:checked');
        if (selected.length === 0) {
            alert('Silakan pilih pendaftar terlebih dahulu dengan mencentang kotak di samping nama.');
            return;
        }

        const container = document.getElementById('selected-ids-container');
        container.innerHTML = '';
        selected.forEach(cb => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'ids[]';
            input.value = cb.value;
            container.appendChild(input);
        });

        document.getElementById('selected-count').innerText = selected.length;
        document.getElementById('bulk-setup-modal').classList.remove('hidden');
    }

    function closeBulkModal() {
        document.getElementById('bulk-setup-modal').classList.add('hidden');
    }

    // Select All functionality
    document.getElementById('select-all').addEventListener('change', function() {
        const checkboxes = document.querySelectorAll('.pendaftar-checkbox');
        checkboxes.forEach(cb => cb.checked = this.checked);
    });
    function toggleBulkFields() {
        const stage = document.getElementById('bulk-stage-select').value;
        const gformWrapper = document.getElementById('bulk-gform-wrapper');
        
        // Update name attributes based on stage
        const jadwal = document.getElementById('bulk-jadwal');
        const gmeet = document.getElementById('bulk-gmeet');
        const tendik = document.getElementById('bulk-tendik');
        const gform = document.getElementById('bulk-gform');

        if (stage === 'akademik') {
            jadwal.name = 'jadwal_akademik';
            gmeet.name = 'link_gmeet_akademik';
            tendik.name = 'id_tendik_akademik';
            gformWrapper.classList.remove('hidden');
        } else if (stage === 'wawancara') {
            jadwal.name = 'jadwal_wawancara';
            gmeet.name = 'link_gmeet_wawancara';
            tendik.name = 'id_tendik_wawancara';
            gformWrapper.classList.add('hidden');
        } else if (stage === 'alquran') {
            jadwal.name = 'jadwal_alquran';
            gmeet.name = 'link_gmeet_alquran';
            tendik.name = 'id_tendik_alquran';
            gformWrapper.classList.add('hidden');
        }
    }
    // Initialize
    toggleBulkFields();
</script>
@endsection
