<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman PPDB {{ $jenjang }} - Pondok Pesantren Aisyah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .tab-active { border-bottom: 3px solid #4f46e5; color: #4f46e5; font-weight: 700; }
    </style>
</head>
<body class="bg-slate-50 font-['Inter']">

    <div class="max-w-4xl mx-auto py-16 px-6">
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-slate-900 mb-4">Hasil Seleksi PPDB TA 2026/2027</h1>
            <p class="text-slate-600">Informasi kelulusan jenjang <span class="font-bold text-indigo-600">{{ $jenjang }}</span></p>
        </div>

        <!-- Tab Navigation -->
        <div class="flex border-b border-slate-200 mb-8 overflow-x-auto whitespace-nowrap">
            @if($is_announced)
                <button onclick="showTab('final')" id="tab-final" class="px-6 py-4 text-slate-500 hover:text-indigo-600 tab-active">Hasil Akhir</button>
            @endif
            @if($is_announced_administrasi)
                <button onclick="showTab('administrasi')" id="tab-administrasi" class="px-6 py-4 text-slate-500 hover:text-indigo-600 {{ !$is_announced ? 'tab-active' : '' }}">Administrasi</button>
            @endif
            @if($is_announced_akademik)
                <button onclick="showTab('akademik')" id="tab-akademik" class="px-6 py-4 text-slate-500 hover:text-indigo-600 {{ (!$is_announced && !$is_announced_administrasi) ? 'tab-active' : '' }}">Seleksi Akademik</button>
            @endif
            @if($is_announced_wawancara)
                <button onclick="showTab('wawancara')" id="tab-wawancara" class="px-6 py-4 text-slate-500 hover:text-indigo-600 {{ (!$is_announced && !$is_announced_administrasi && !$is_announced_akademik) ? 'tab-active' : '' }}">Wawancara</button>
            @endif
            @if($is_announced_alquran)
                <button onclick="showTab('alquran')" id="tab-alquran" class="px-6 py-4 text-slate-500 hover:text-indigo-600 {{ (!$is_announced && !$is_announced_administrasi && !$is_announced_akademik && !$is_announced_wawancara) ? 'tab-active' : '' }}">Al-Quran</button>
            @endif
        </div>

        <!-- Final Results -->
        @if($is_announced)
        <div id="content-final" class="tab-content">
            <h2 class="text-xl font-bold text-slate-800 mb-4">Daftar Calon Santri Diterima</h2>
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                <table class="w-full text-left">
                    <thead class="bg-indigo-600 text-white">
                        <tr>
                            <th class="px-8 py-4 text-sm font-semibold">No.</th>
                            <th class="px-8 py-4 text-sm font-semibold">Nama Lengkap</th>
                            <th class="px-8 py-4 text-sm font-semibold">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($results_final as $index => $res)
                        <tr class="{{ $res->status_kelulusan ? 'bg-emerald-50/30' : '' }}">
                            <td class="px-8 py-4 text-slate-500 text-sm">{{ $index + 1 }}</td>
                            <td class="px-8 py-4 font-bold text-slate-800 text-sm">{{ $res->pendaftaran->nama_lengkap }}</td>
                            <td class="px-8 py-4">
                                @if($res->status_kelulusan)
                                    <span class="px-3 py-1 bg-emerald-500 text-white rounded-full text-[10px] font-bold uppercase">Diterima</span>
                                @else
                                    <span class="px-3 py-1 bg-rose-100 text-rose-600 rounded-full text-[10px] font-bold uppercase">Tidak Diterima</span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="3" class="px-8 py-10 text-center text-slate-400 italic">Belum ada data pengumuman final</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @endif

        <!-- Administrasi Results -->
        @if($is_announced_administrasi)
        <div id="content-administrasi" class="tab-content {{ $is_announced ? 'hidden' : '' }}">
            <h2 class="text-xl font-bold text-slate-800 mb-4">Lolos Seleksi Administrasi</h2>
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                <table class="w-full text-left">
                    <thead class="bg-slate-800 text-white">
                        <tr>
                            <th class="px-8 py-4 text-sm font-semibold">No.</th>
                            <th class="px-8 py-4 text-sm font-semibold">Nama Lengkap</th>
                            <th class="px-8 py-4 text-sm font-semibold text-center">Hasil</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($results_administrasi as $index => $res)
                        <tr>
                            <td class="px-8 py-4 text-slate-500 text-sm">{{ $index + 1 }}</td>
                            <td class="px-8 py-4 font-bold text-slate-800 text-sm">{{ $res->pendaftaran->nama_lengkap }}</td>
                            <td class="px-8 py-4 text-center">
                                <span class="px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-[10px] font-bold uppercase">Lolos Administrasi</span>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="3" class="px-8 py-10 text-center text-slate-400 italic">Belum ada data pendaftar yang lolos</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @endif

        <!-- Academic Results -->
        @if($is_announced_akademik)
        <div id="content-akademik" class="tab-content {{ ($is_announced || $is_announced_administrasi) ? 'hidden' : '' }}">
            <h2 class="text-xl font-bold text-slate-800 mb-4">Lolos Seleksi Akademik</h2>
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                <table class="w-full text-left">
                    <thead class="bg-slate-800 text-white">
                        <tr>
                            <th class="px-8 py-4 text-sm font-semibold">No.</th>
                            <th class="px-8 py-4 text-sm font-semibold">Nama Lengkap</th>
                            <th class="px-8 py-4 text-sm font-semibold text-center">Hasil</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($results_akademik as $index => $res)
                        <tr>
                            <td class="px-8 py-4 text-slate-500 text-sm">{{ $index + 1 }}</td>
                            <td class="px-8 py-4 font-bold text-slate-800 text-sm">{{ $res->pendaftaran->nama_lengkap }}</td>
                            <td class="px-8 py-4 text-center">
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-[10px] font-bold uppercase">Lolos Tahap Akademik</span>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="3" class="px-8 py-10 text-center text-slate-400 italic">Belum ada data pendaftar yang lolos</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @endif

        <!-- Interview Results -->
        @if($is_announced_wawancara)
        <div id="content-wawancara" class="tab-content {{ ($is_announced || $is_announced_administrasi || $is_announced_akademik) ? 'hidden' : '' }}">
            <h2 class="text-xl font-bold text-slate-800 mb-4">Lolos Seleksi Wawancara</h2>
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                <table class="w-full text-left">
                    <thead class="bg-slate-800 text-white">
                        <tr>
                            <th class="px-8 py-4 text-sm font-semibold">No.</th>
                            <th class="px-8 py-4 text-sm font-semibold">Nama Lengkap</th>
                            <th class="px-8 py-4 text-sm font-semibold text-center">Hasil</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($results_wawancara as $index => $res)
                        <tr>
                            <td class="px-8 py-4 text-slate-500 text-sm">{{ $index + 1 }}</td>
                            <td class="px-8 py-4 font-bold text-slate-800 text-sm">{{ $res->pendaftaran->nama_lengkap }}</td>
                            <td class="px-8 py-4 text-center">
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-[10px] font-bold uppercase">Lolos Wawancara</span>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="3" class="px-8 py-10 text-center text-slate-400 italic">Belum ada data pendaftar yang lolos</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @endif

        <!-- Quran Results -->
        @if($is_announced_alquran)
        <div id="content-alquran" class="tab-content {{ ($is_announced || $is_announced_administrasi || $is_announced_akademik || $is_announced_wawancara) ? 'hidden' : '' }}">
            <h2 class="text-xl font-bold text-slate-800 mb-4">Lolos Seleksi Baca Al-Quran</h2>
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                <table class="w-full text-left">
                    <thead class="bg-slate-800 text-white">
                        <tr>
                            <th class="px-8 py-4 text-sm font-semibold">No.</th>
                            <th class="px-8 py-4 text-sm font-semibold">Nama Lengkap</th>
                            <th class="px-8 py-4 text-sm font-semibold text-center">Hasil</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($results_alquran as $index => $res)
                        <tr>
                            <td class="px-8 py-4 text-slate-500 text-sm">{{ $index + 1 }}</td>
                            <td class="px-8 py-4 font-bold text-slate-800 text-sm">{{ $res->pendaftaran->nama_lengkap }}</td>
                            <td class="px-8 py-4 text-center">
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-[10px] font-bold uppercase">Lolos Baca Al-Quran</span>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="3" class="px-8 py-10 text-center text-slate-400 italic">Belum ada data pendaftar yang lolos</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @endif

        <div class="mt-12 text-center">
            <a href="/" class="inline-flex items-center gap-2 text-indigo-600 font-bold hover:text-indigo-800 transition">
                <i class="fas fa-arrow-left"></i>
                Kembali ke Beranda
            </a>
        </div>
    </div>

    <script>
        function showTab(tabId) {
            // Hide all contents
            document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
            // Remove active style from all tabs
            document.querySelectorAll('button[id^="tab-"]').forEach(el => {
                el.classList.remove('tab-active');
                el.classList.add('text-slate-500');
            });

            // Show selected content
            document.getElementById('content-' + tabId).classList.remove('hidden');
            // Add active style to selected tab
            document.getElementById('tab-' + tabId).classList.add('tab-active');
            document.getElementById('tab-' + tabId).classList.remove('text-slate-500');
        }
    </script>

</body>
</html>
