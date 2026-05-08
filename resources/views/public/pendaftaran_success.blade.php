@extends('layouts.app')

@section('title', 'Pendaftaran Berhasil')

@section('content')
<div class="min-h-[80vh] flex items-center justify-center bg-slate-50">
    <div class="max-w-md w-full px-6 py-12 bg-white rounded-3xl shadow-xl text-center">
        <div class="w-24 h-24 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center text-4xl mx-auto mb-8 animate-bounce">
            <i class="fas fa-check"></i>
        </div>
        <h2 class="text-3xl font-bold text-slate-800 mb-4">Pendaftaran Berhasil!</h2>
        <p class="text-slate-600 mb-8">{{ session('message') ?? 'Terima kasih telah mendaftar di Pondok Pesantren Aisyah Samawa.' }}</p>
        
        <div class="space-y-4">
            <p class="text-sm text-slate-500 italic">Silakan cek email Anda secara berkala untuk informasi tahapan seleksi selanjutnya.</p>
            <a href="{{ route('home') }}" class="block w-full py-4 bg-indigo-600 text-white font-bold rounded-2xl hover:bg-indigo-700 transition">Kembali ke Beranda</a>
        </div>
    </div>
</div>
@endsection
