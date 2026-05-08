@extends('layouts.dashboard')

@section('title', 'Super Admin Dashboard')
@section('page-title', 'Dashboard Ringkasan')

@section('sidebar-menu')
    @include('partials.sidebar-superadmin')
@endsection

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <!-- Stat Cards -->
    <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
        <div class="flex justify-between items-start mb-4">
            <div class="p-3 bg-indigo-50 text-indigo-600 rounded-xl">
                <i class="fas fa-users text-xl"></i>
            </div>
        </div>
        <h3 class="text-slate-500 text-sm font-medium">Total Pendaftar</h3>
        <p class="text-2xl font-bold mt-1 text-slate-800">{{ $total_pendaftar ?? 0 }}</p>
    </div>

    <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
        <div class="flex justify-between items-start mb-4">
            <div class="p-3 bg-rose-50 text-rose-600 rounded-xl">
                <i class="fas fa-user-shield text-xl"></i>
            </div>
        </div>
        <h3 class="text-slate-500 text-sm font-medium">Total Admin</h3>
        <p class="text-2xl font-bold mt-1 text-slate-800">{{ $total_admin ?? 0 }}</p>
    </div>

    <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
        <div class="flex justify-between items-start mb-4">
            <div class="p-3 bg-amber-50 text-amber-600 rounded-xl">
                <i class="fas fa-user-tie text-xl"></i>
            </div>
        </div>
        <h3 class="text-slate-500 text-sm font-medium">Total Tendik</h3>
        <p class="text-2xl font-bold mt-1 text-slate-800">{{ $total_tendik ?? 0 }}</p>
    </div>

    <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
        <div class="flex justify-between items-start mb-4">
            <div class="p-3 bg-emerald-50 text-emerald-600 rounded-xl">
                <i class="fas fa-check-double text-xl"></i>
            </div>
        </div>
        <h3 class="text-slate-500 text-sm font-medium">Diterima</h3>
        <p class="text-2xl font-bold mt-1 text-slate-800">{{ $total_lulus ?? 0 }}</p>
    </div>
</div>

<div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
    <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm">
        <h3 class="text-lg font-bold mb-6">Pendaftar Per Jenjang</h3>
        <div class="space-y-4">
            @php
                $jenjangs = ['PAUD', 'SD', 'SMP', 'SMA'];
            @endphp
            @foreach($jenjangs as $j)
            <div>
                <div class="flex justify-between text-sm mb-2">
                    <span class="font-semibold">{{ $j }}</span>
                    <span class="text-slate-500">{{ $counts[$j] ?? 0 }} Santri</span>
                </div>
                <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                    <div class="bg-indigo-600 h-full" style="width: {{ $total_pendaftar > 0 ? (($counts[$j] ?? 0) / $total_pendaftar * 100) : 0 }}%"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm">
        <h3 class="text-lg font-bold mb-6">Kontrol Pendaftaran (Buka/Tutup)</h3>
        <div class="space-y-4">
            @foreach($jenjangs as $j)
            @php
                $column = 'is_registration_open_' . strtolower($j);
                $isOpen = $kontenUmum ? $kontenUmum->$column : true;
            @endphp
            <div class="flex items-center justify-between p-4 rounded-xl {{ $isOpen ? 'bg-emerald-50' : 'bg-rose-50' }}">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center {{ $isOpen ? 'bg-emerald-100 text-emerald-600' : 'bg-rose-100 text-rose-600' }}">
                        <i class="fas {{ $isOpen ? 'fa-door-open' : 'fa-door-closed' }}"></i>
                    </div>
                    <div>
                        <div class="font-bold text-sm">{{ $j }}</div>
                        <div class="text-xs {{ $isOpen ? 'text-emerald-600' : 'text-rose-600' }}">{{ $isOpen ? 'Pendaftaran Dibuka' : 'Pendaftaran Ditutup' }}</div>
                    </div>
                </div>
                <form action="{{ route('superadmin.toggle-registration', $j) }}" method="POST">
                    @csrf
                    <button type="submit" class="px-4 py-2 rounded-lg text-xs font-bold transition {{ $isOpen ? 'bg-rose-600 text-white hover:bg-rose-700' : 'bg-emerald-600 text-white hover:bg-emerald-700' }}">
                        {{ $isOpen ? 'Tutup' : 'Buka' }}
                    </button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
