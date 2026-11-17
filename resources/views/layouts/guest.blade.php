<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Restoranku') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-slate-800 antialiased bg-slate-50 selection:bg-teal-500 selection:text-white min-h-screen relative overflow-x-hidden">
        <!-- Ambient Background Decoration -->
        <div class="fixed top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-96 pointer-events-none z-0 overflow-hidden">
            <div class="absolute -top-24 left-1/4 w-96 h-96 bg-teal-200/40 rounded-full blur-3xl"></div>
            <div class="absolute -top-20 right-1/4 w-80 h-80 bg-sky-200/40 rounded-full blur-3xl"></div>
        </div>

        <div class="min-h-screen flex flex-col justify-center items-center py-12 px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Brand Logo & Name Header -->
            <div class="mb-8 text-center">
                <a href="/" class="inline-flex items-center gap-3.5 group">
                    <div class="w-13 h-13 rounded-2xl bg-gradient-to-tr from-teal-600 to-teal-400 flex items-center justify-center text-white shadow-xl shadow-teal-500/25 group-hover:scale-105 group-hover:rotate-3 transition-all duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <div class="text-left">
                        <span class="block text-2xl font-extrabold tracking-tight text-slate-900 leading-none">Restoranku</span>
                        <span class="block text-[11px] font-semibold tracking-wider text-teal-600 uppercase mt-1">Management System</span>
                    </div>
                </a>
            </div>

            <!-- Main Card Container -->
            <div class="w-full sm:max-w-md bg-white/80 backdrop-blur-xl p-8 sm:p-10 shadow-2xl shadow-slate-200/60 rounded-[2.5rem] border border-white/60">
                {{ $slot }}
            </div>

            <!-- Footer -->
            <div class="mt-8 text-center text-xs font-medium text-slate-400">
                © {{ date('Y') }} {{ config('app.name', 'Restoranku') }}. All rights reserved.
            </div>
        </div>
    </body>
</html>