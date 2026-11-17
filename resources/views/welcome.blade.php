<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Restoranku') }} - System Management</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-slate-800 antialiased bg-slate-50 selection:bg-teal-500 selection:text-white min-h-screen flex flex-col justify-between relative overflow-x-hidden">
        
        <!-- Ambient Background Decoration -->
        <div class="fixed top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-96 pointer-events-none z-0 overflow-hidden">
            <div class="absolute -top-24 left-1/4 w-96 h-96 bg-teal-200/40 rounded-full blur-3xl"></div>
            <div class="absolute -top-20 right-1/4 w-80 h-80 bg-sky-200/40 rounded-full blur-3xl"></div>
        </div>

        <!-- Header Bar -->
        <header class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex items-center justify-between">
                <!-- Brand Logo -->
                <a href="/" class="flex items-center gap-3.5 group">
                    <div class="w-11 h-11 rounded-2xl bg-gradient-to-tr from-teal-600 to-teal-400 flex items-center justify-center text-white shadow-xl shadow-teal-500/25 group-hover:scale-105 group-hover:rotate-3 transition-all duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <div>
                        <span class="block text-xl font-extrabold tracking-tight text-slate-900 leading-none">Restoranku</span>
                        <span class="block text-[10px] font-semibold tracking-wider text-teal-600 uppercase mt-0.5">Management System</span>
                    </div>
                </a>

                <!-- Indikator Status Login Staf (Jika sudah login) -->
                @auth
                    <a href="{{ url('/dashboard') }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-2xl text-xs font-bold text-white bg-teal-600 hover:bg-teal-700 shadow-lg shadow-teal-600/20 transition-all active:scale-95">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>
                        <span>Ke Dashboard</span>
                    </a>
                @endauth
            </div>
        </header>

        <!-- Hero Section -->
        <main class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 flex-grow flex items-center">
            <div class="w-full text-center max-w-3xl mx-auto">
                
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/80 border border-slate-200/80 backdrop-blur-md shadow-sm mb-6">
                    <span class="w-2.5 h-2.5 rounded-full bg-teal-500 animate-pulse"></span>
                    <span class="text-xs font-semibold text-slate-600">Sistem Operasional Restoran Terintegrasi</span>
                </div>

                <!-- Main Title -->
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                    Platform Manajemen <span class="bg-gradient-to-r from-teal-600 to-teal-400 bg-clip-text text-transparent">Restoranku</span>
                </h1>

                <!-- Subtitle -->
                <p class="mt-6 text-base sm:text-lg text-slate-600 leading-relaxed max-w-2xl mx-auto">
                    Sistem internal untuk mendukung koordinasi tim Dapur, Kasir, dan Manajemen Restoran dalam memproses pesanan dan menyajikan pelayanan terbaik.
                </p>

                <!-- Tombol Akses (Hanya Muncul Jika Staf Sudah Sesi Login) -->
                @auth
                    <div class="mt-10 flex justify-center">
                        <a href="{{ url('/dashboard') }}" class="inline-flex items-center gap-2.5 px-8 py-4 rounded-2xl text-sm font-bold text-white bg-gradient-to-r from-teal-600 to-teal-500 hover:from-teal-700 hover:to-teal-600 shadow-xl shadow-teal-600/25 transition-all duration-200 active:scale-[0.98]">
                            <span>Buka Dashboard Restoranku</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                        </a>
                    </div>
                @endauth

            </div>
        </main>

        <!-- Footer -->
        <footer class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 text-center text-xs font-medium text-slate-400">
            &copy; {{ date('Y') }} {{ config('app.name', 'Restoranku') }}. Internal Restaurant Management.
        </footer>
    </body>
</html>