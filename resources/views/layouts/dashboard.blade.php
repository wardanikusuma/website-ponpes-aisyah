<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Dashboard PPDB</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-900 text-white flex-shrink-0 flex flex-col transition-all duration-300">
            <div class="p-6 flex items-center gap-3">
                <div class="w-10 h-10 bg-indigo-600 rounded-lg flex items-center justify-center">
                    <i class="fas fa-graduation-cap text-xl"></i>
                </div>
                <span class="font-bold text-xl tracking-tight">PPDB <span class="text-indigo-400">AISYAH</span></span>
            </div>

            <nav class="flex-grow px-4 space-y-1 mt-4">
                @yield('sidebar-menu')
            </nav>

            <div class="p-4 border-t border-slate-800">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white hover:bg-slate-800 rounded-xl transition w-full">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="font-medium">Keluar</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-grow flex flex-col">
            <!-- Topbar -->
            <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-8">
                <div class="flex items-center gap-4">
                    <button class="lg:hidden text-slate-500">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h2 class="text-lg font-semibold text-slate-700">@yield('page-title')</h2>
                </div>
                <div class="flex items-center gap-4">
                    <div class="flex flex-col items-end">
                        <span class="text-sm font-semibold">{{ Auth::user()->nama ?? 'User' }}</span>
                        <span class="text-xs text-slate-500">{{ strtoupper(Auth::getDefaultDriver()) }}</span>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-slate-200 border-2 border-white overflow-hidden">
                        @if(Auth::user()->foto)
                            <img src="{{ asset('storage/' . Auth::user()->foto) }}" alt="Avatar" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-slate-400 bg-slate-100">
                                <i class="fas fa-user"></i>
                            </div>
                        @endif
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <div class="p-8">
                @if(session('success'))
                    <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-xl flex items-center gap-3">
                        <i class="fas fa-check-circle"></i>
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="mb-6 p-4 bg-rose-50 border border-rose-200 text-rose-700 rounded-xl">
                        <ul class="list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>
    @stack('scripts')
</body>
</html>
