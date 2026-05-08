@extends('layouts.dashboard')

@section('title', 'Tendik Dashboard')
@section('page-title', 'Dashboard Tendik ' . Auth::user()->jenjang)

@section('sidebar-menu')
    @include('partials.sidebar-tendik')
@endsection

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
        <h3 class="text-slate-500 text-sm font-medium">Tugas Mendatang</h3>
        <p class="text-3xl font-bold mt-1 text-slate-800">{{ $total_tugas ?? 0 }}</p>
    </div>
    <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
        <h3 class="text-slate-500 text-sm font-medium">Sudah Dinilai</h3>
        <p class="text-3xl font-bold mt-1 text-slate-800">{{ $tugas_selesai ?? 0 }}</p>
    </div>
</div>

<div class="mt-8 bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
    <div class="p-6 border-b border-slate-100 flex justify-between items-center">
        <h3 class="text-lg font-bold text-slate-800">Tugas Seleksi Terdekat</h3>
        <a href="{{ route('tendik.tugas.index') }}" class="text-sm font-semibold text-indigo-600 hover:underline">Lihat Semua</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-slate-50 text-slate-500 text-xs font-bold uppercase tracking-wider">
                <tr>
                    <th class="px-6 py-4">Nama Santri</th>
                    <th class="px-6 py-4">Jenis Seleksi</th>
                    <th class="px-6 py-4">Jadwal</th>
                    <th class="px-6 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($upcoming_tasks ?? [] as $task)
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-4">
                        <div class="font-bold text-slate-700">{{ $task->seleksi->pendaftaran->nama_lengkap ?? 'Unknown' }}</div>
                        <div class="text-xs text-slate-500">{{ $task->seleksi->jenjang }}</div>
                    </td>
                    <td class="px-6 py-4">
                        @if($task->type == 'akademik')
                            <span class="px-2 py-1 bg-blue-100 text-blue-600 rounded text-[10px] font-bold uppercase">Akademik</span>
                        @elseif($task->type == 'wawancara')
                            <span class="px-2 py-1 bg-amber-100 text-amber-600 rounded text-[10px] font-bold uppercase">Wawancara</span>
                        @endif
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
                        <a href="{{ route('tendik.tugas.input-nilai', ['id' => $task->seleksi->id, 'type' => $task->type]) }}" class="px-4 py-2 bg-indigo-50 text-indigo-600 rounded-lg text-xs font-bold hover:bg-indigo-600 hover:text-white transition">
                            Input Nilai
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-10 text-center text-slate-400 italic">Tidak ada tugas terdekat</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
