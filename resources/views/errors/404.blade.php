<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Halaman Tidak Ditemukan - {{ config('app.name', 'Restoranku') }}</title>

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

        <!-- Header / Logo -->
        <header class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex items-center justify-center sm:justify-start">
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
            </div>
        </header>

        <!-- Main Content 404 -->
        <main class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex-grow flex items-center justify-center">
            <div class="w-full sm:max-w-md bg-white/80 backdrop-blur-xl p-8 sm:p-10 text-center shadow-2xl shadow-slate-200/60 rounded-[2.5rem] border border-white/60">
                
                <!-- Graphic Illustration / Badge -->
                <div class="relative w-24 h-24 mx-auto mb-6 flex items-center justify-center">
                    <div class="absolute inset-0 rounded-3xl bg-teal-100/70 rotate-6 transform transition-transform"></div>
                    <div class="relative w-24 h-24 rounded-3xl bg-gradient-to-tr from-teal-600 to-teal-400 flex items-center justify-center text-white shadow-lg shadow-teal-500/30">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Error Code & Title -->
                <span class="inline-block px-3.5 py-1 rounded-full bg-teal-50 text-teal-700 text-xs font-bold tracking-wider uppercase mb-3 border border-teal-100">
                    Error 404
                </span>
                <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                    Halaman Tidak Ditemukan
                </h1>

                <!-- Message -->
                <p class="mt-3 text-xs sm:text-sm text-slate-500 leading-relaxed">
                    Maaf, menu atau halaman yang kamu cari mungkin sudah dihapus, diubah namaya, atau tidak pernah ada di sistem <strong class="text-slate-700">Restoranku</strong>.
                </p>

                <!-- Action Buttons -->
                <div class="mt-8 space-y-3">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="w-full flex justify-center items-center gap-2 py-3.5 px-4 rounded-2xl text-xs sm:text-sm font-bold text-white bg-gradient-to-r from-teal-600 to-teal-500 hover:from-teal-700 hover:to-teal-600 focus:outline-none focus:ring-4 focus:ring-teal-500/25 shadow-lg shadow-teal-600/25 transition-all duration-200 active:scale-[0.98]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>
                            <span>Kembali ke Dashboard</span>
                        </a>
                    @else
                        <a href="{{ url('/') }}" class="w-full flex justify-center items-center gap-2 py-3.5 px-4 rounded-2xl text-xs sm:text-sm font-bold text-white bg-gradient-to-r from-teal-600 to-teal-500 hover:from-teal-700 hover:to-teal-600 focus:outline-none focus:ring-4 focus:ring-teal-500/25 shadow-lg shadow-teal-600/25 transition-all duration-200 active:scale-[0.98]">
                            <span>Halaman Utama</span>
                        </a>
                    @endauth

                    <button onclick="window.history.back()" class="w-full py-3 px-4 rounded-2xl text-xs sm:text-sm font-semibold text-slate-600 hover:text-slate-900 bg-slate-100/80 hover:bg-slate-200/60 transition-all">
                        &larr; Kembali ke Halaman Sebelumnya
                    </button>
                </div>

            </div>
        </main>

        <!-- Footer -->
        <footer class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 text-center text-xs font-medium text-slate-400">
            &copy; {{ date('Y') }} {{ config('app.name', 'Restoranku') }}. All rights reserved.
        </footer>
    </body>
</html>