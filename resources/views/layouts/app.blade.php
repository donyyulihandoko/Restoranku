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
    <body class="font-sans antialiased bg-slate-50 text-slate-800 selection:bg-teal-500 selection:text-white" x-data="{ sidebarOpen: false }">
        <div class="min-h-screen flex flex-col">
            <!-- Topbar -->
            {{-- <nav class="h-16 bg-slate-900/95 backdrop-blur-md text-white border-b border-slate-800/90 sticky top-0 z-40 shrink-0 shadow-xs">
                <div class="h-full px-4 sm:px-6 flex items-center justify-between gap-4">
                    <div class="flex items-center gap-3 min-w-0">
                        @isset($sidebar)
                            <button type="button"
                                    @click="sidebarOpen = !sidebarOpen"
                                    class="lg:hidden p-2 rounded-2xl text-slate-400 hover:text-white hover:bg-slate-800 transition-colors shrink-0"
                                    aria-label="Toggle sidebar">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        @endisset

                        <a href="{{ route('dashboard') }}" class="flex items-center gap-2.5 shrink-0">
                            <span class="w-8 h-8 rounded-2xl bg-gradient-to-tr from-teal-600 to-teal-400 flex items-center justify-center text-white font-extrabold text-sm shadow-md shadow-teal-500/20">
                                R
                            </span>
                            <span class="font-extrabold text-lg tracking-tight text-white">
                                {{ config('app.name', 'Restoranku') }}
                            </span>
                        </a>

                        @isset($header)
                            <div class="hidden sm:flex items-center pl-4 ml-1 border-l border-slate-800 text-sm font-semibold text-slate-300 truncate">
                                {{ $header }}
                            </div>
                        @endisset
                    </div>

                    <div class="flex items-center gap-3 text-sm shrink-0">
                        <div class="hidden md:flex items-center gap-2.5 px-3 py-1.5 rounded-2xl bg-slate-800/70 border border-slate-700/60">
                            <span class="w-6 h-6 rounded-xl bg-teal-500/20 text-teal-300 font-bold text-xs flex items-center justify-center">
                                {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
                            </span>
                            <span class="text-xs font-semibold text-slate-200 max-w-[140px] truncate">
                                {{ Auth::user()->name ?? 'Super Admin' }}
                            </span>
                        </div>

                        <form method="POST" action="{{ route('logout') }}" class="m-0">
                            @csrf
                            <button type="submit"
                                    class="px-3.5 py-2 rounded-2xl bg-slate-800/80 hover:bg-rose-500/15 text-slate-300 hover:text-rose-300 border border-slate-700/60 hover:border-rose-500/30 text-xs font-bold transition-all">
                                Keluar
                            </button>
                        </form>
                    </div>
                </div>
            </nav> --}}

            <!-- Area Bawah Topbar: Sidebar + Konten Utama -->
            <div class="flex-1 flex min-h-0">
                @isset($sidebar)
                    <div x-show="sidebarOpen"
                        x-cloak
                        @click="sidebarOpen = false"
                        class="fixed top-16 inset-x-0 bottom-0 z-20 bg-slate-900/50 backdrop-blur-xs lg:hidden"></div>

                    <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
                        class="fixed top-16 bottom-0 left-0 z-30 w-64 bg-slate-900 text-white border-r border-slate-800 overflow-y-auto transition-transform duration-200 lg:static lg:top-auto lg:bottom-auto lg:translate-x-0 lg:w-64 shrink-0">
                        <div class="p-4">
                            {{ $sidebar }}
                        </div>
                    </aside>
                @endisset

                <main class="flex-1 min-w-0 p-4 sm:p-6 lg:p-8">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>