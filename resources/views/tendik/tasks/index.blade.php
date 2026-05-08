@extends('layouts.dashboard')

@section('title', 'Jadwal Tugas Seleksi')
@section('page-title', 'Daftar Tugas Seleksi')

@section('sidebar-menu')
    @include('partials.sidebar-tendik')
@endsection

@section('content')
<div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
    <div class="p-6 border-b border-slate-100 flex justify-between items-center">
        <div>
            <h3 class="text-lg font-bold text-slate-800">
                {{ request()->query('status') == 'pending' ? 'Tugas Input Nilai' : 'Daftar Santri Seleksi' }}
            </h3>
            <p class="text-slate-500 text-sm mt-1">
                {{ request()->query('status') == 'pending' ? 'Daftar santri yang belum diberikan penilaian.' : 'Silakan pilih santri untuk mulai memberikan penilaian.' }}
            </p>
        </div>
        <div class="flex gap-3">
            <div class="relative">
                <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm"></i>
                <input type="text" placeholder="Cari nama santri..." class="pl-10 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500/20">
            </div>
        </div>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-slate-50 text-slate-500 text-xs font-bold uppercase tracking-wider">
                <tr>
                    <th class="px-6 py-4">No.</th>
                    <th class="px-6 py-4">Nama Santri</th>
                    <th class="px-6 py-4">Jenis Seleksi</th>
                    <th class="px-6 py-4">Jadwal</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($tasks as $index => $task)
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-4 text-slate-500 text-sm">{{ $index + 1 }}</td>
                    <td class="px-6 py-4">
                        <div class="font-bold text-slate-700">{{ $task->seleksi->pendaftaran->nama_lengkap ?? 'Unknown' }}</div>
                        <div class="text-xs text-slate-500">{{ $task->seleksi->jenjang }} - {{ $task->seleksi->pendaftaran->nisn ?? $task->seleksi->pendaftaran->nik ?? '-' }}</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex flex-col gap-2">
                            @if($task->type == 'akademik')
                                <span class="px-2 py-1 bg-blue-100 text-blue-600 rounded text-[10px] font-bold uppercase w-fit">Akademik</span>
                            @elseif($task->type == 'wawancara')
                                <span class="px-2 py-1 bg-amber-100 text-amber-600 rounded text-[10px] font-bold uppercase w-fit">Wawancara</span>
                            @elseif($task->type == 'alquran')
                                <span class="px-2 py-1 bg-emerald-100 text-emerald-600 rounded text-[10px] font-bold uppercase w-fit">Baca Al-Quran</span>
                            @endif

                            <div class="flex gap-2">
                                @if($task->type == 'akademik' && $task->seleksi->link_gform)
                                    <a href="{{ $task->seleksi->link_gform }}" target="_blank" title="G-Form" class="w-6 h-6 flex items-center justify-center bg-emerald-100 text-emerald-600 rounded hover:bg-emerald-600 hover:text-white transition text-[10px]">
                                        <i class="fas fa-file-alt"></i>
                                    </a>
                                @endif
                                @php
                                    $linkGmeet = null;
                                    if($task->type == 'akademik') $linkGmeet = $task->seleksi->link_gmeet_akademik;
                                    elseif($task->type == 'wawancara') $linkGmeet = $task->seleksi->link_gmeet_wawancara;
                                    elseif($task->type == 'alquran') $linkGmeet = $task->seleksi->link_gmeet_alquran;
                                @endphp
                                @if($linkGmeet)
                                    <a href="{{ $linkGmeet }}" target="_blank" title="G-Meet" class="w-6 h-6 flex items-center justify-center bg-blue-100 text-blue-600 rounded hover:bg-blue-600 hover:text-white transition text-[10px]">
                                        <i class="fas fa-video"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm">
                        @if($task->jadwal)
                            <div class="text-slate-700 font-medium">{{ \Carbon\Carbon::parse($task->jadwal)->translatedFormat('d F Y') }}</div>
                            <div class="text-slate-500 text-xs">{{ \Carbon\Carbon::parse($task->jadwal)->format('H:i') }} WIB</div>
                        @else
                            <span class="text-slate-400 italic text-xs">Belum dijadwalkan</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @if($task->nilai !== null)
                            <div class="flex flex-col gap-1">
                                <span class="text-xs font-bold text-slate-700">Nilai: {{ $task->nilai }}</span>
                                @if($task->status == 1)
                                    <span class="px-2 py-0.5 bg-emerald-100 text-emerald-600 rounded text-[10px] font-bold uppercase w-fit">Lulus</span>
                                @else
                                    <span class="px-2 py-0.5 bg-rose-100 text-rose-600 rounded text-[10px] font-bold uppercase w-fit">Tidak Lulus</span>
                                @endif
                            </div>
                        @else
                            <span class="px-2 py-1 bg-slate-100 text-slate-400 rounded text-[10px] font-bold uppercase">Menunggu</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('tendik.tugas.input-nilai', ['id' => $task->seleksi->id, 'type' => $task->type]) }}" class="flex items-center gap-2 px-4 py-2 bg-indigo-600 text-white rounded-lg text-xs font-bold hover:bg-indigo-700 transition shadow-sm shadow-indigo-200">
                            <i class="fas fa-edit"></i>
                            {{ $task->nilai !== null ? 'Edit Nilai' : 'Input Nilai' }}
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-6 py-10 text-center text-slate-400 italic">
                        <div class="flex flex-col items-center gap-2">
                            <i class="fas fa-clipboard-list text-3xl mb-2"></i>
                            <span>Tidak ada tugas seleksi yang ditugaskan kepada Anda.</span>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
