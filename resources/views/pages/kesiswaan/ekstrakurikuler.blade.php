@extends('layouts.app')

@section('title', 'Ekstrakurikuler')

@section('content')
<section class="bg-gradient-to-r from-indigo-900 to-purple-900 py-24">
    <div class="max-w-7xl mx-auto px-4 text-center text-white">
        <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tighter">Minat & <span class="text-purple-300">Bakat</span></h1>
        <p class="mt-4 text-purple-100 font-medium">Wadah eksplorasi potensi diri santriwati Aisyah Samawa.</p>
    </div>
</section>

<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-8">
        @php
            $ekskuls = [
                ['name' => 'Tahfidz Plus', 'icon' => '📖'],
                ['name' => 'Coding Lab', 'icon' => '💻'],
                ['name' => 'Panahan', 'icon' => '🏹'],
                ['name' => 'Bahasa Arab', 'icon' => '🌍'],
                ['name' => 'Kaligrafi', 'icon' => '✒️'],
                ['name' => 'Sains Club', 'icon' => '🧪'],
                ['name' => 'Jurnalistik', 'icon' => '📸'],
                ['name' => 'Bela Diri', 'icon' => '🥋'],
            ];
        @endphp

        @foreach($ekskuls as $ekskul)
        <div class="bg-white p-10 rounded-[2.5rem] shadow-sm border border-slate-100 text-center transition-all group hover:bg-purple-600 hover:scale-105 duration-300">
            <div class="text-4xl mb-6 group-hover:scale-110 transition-transform">{{ $ekskul['icon'] }}</div>
            <h4 class="font-black text-gray-900 group-hover:text-white uppercase tracking-tight">{{ $ekskul['name'] }}</h4>
        </div>
        @endforeach
    </div>
</section>
@endsection
