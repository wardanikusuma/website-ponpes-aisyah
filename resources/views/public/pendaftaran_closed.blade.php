<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Ditutup - Pondok Pesantren Aisyah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-50 font-['Inter']">

    <div class="max-w-4xl mx-auto py-32 px-6">
        <div class="bg-white rounded-3xl shadow-xl p-12 text-center border border-slate-100">
            <div class="w-20 h-20 bg-rose-100 text-rose-600 rounded-full flex items-center justify-center text-3xl mx-auto mb-6">
                <i class="fas fa-lock"></i>
            </div>
            <h1 class="text-3xl font-bold text-slate-900 mb-4">Mohon Maaf, Pendaftaran Ditutup</h1>
            <p class="text-slate-600 mb-8 max-w-md mx-auto">Saat ini pendaftaran peserta didik baru untuk jenjang <span class="font-bold text-indigo-600">{{ $jenjang }}</span> telah resmi ditutup karena kuota sudah terpenuhi atau periode pendaftaran telah berakhir.</p>
            
            <div class="space-y-4">
                <p class="text-sm text-slate-400">Silakan pantau informasi terbaru melalui website kami atau hubungi panitia PPDB.</p>
                <a href="/" class="inline-flex items-center px-8 py-3 bg-indigo-600 text-white font-bold rounded-xl shadow-lg shadow-indigo-500/30 hover:bg-indigo-700 transition">
                    <i class="fas fa-home mr-2"></i> Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>

</body>
</html>
