<x-app-layout>
    {{-- <x-slot name="sidebar">
        <x-superadmin-sidebar active-menu="dashboard" />
    </x-slot> --}}

    <x-slot name="header">
        Dashboard Super Admin
    </x-slot>

    <div class="max-w-7xl mx-auto space-y-6">
        <!-- Hero Banner -->
        <div class="bg-gradient-to-br from-teal-600 via-teal-600 to-emerald-600 rounded-3xl p-6 sm:p-8 text-white shadow-lg shadow-teal-900/5 border border-teal-500/20">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <span class="inline-flex items-center px-3 py-1 rounded-full bg-white/15 backdrop-blur-xs text-[11px] font-bold uppercase tracking-wider text-teal-50">
                        Restoranku • Super Admin
                    </span>
                    <h2 class="mt-3 text-2xl sm:text-3xl font-extrabold tracking-tight">
                        Selamat datang, {{ Auth::user()->name ?? 'Super Admin' }}
                    </h2>
                    <p class="mt-1.5 text-sm text-teal-50/90 max-w-2xl leading-relaxed">
                        Pantau ringkasan operasional restoran, kelola akses staf, atur kategori serta katalog menu, dan siapkan QR Code meja pelanggan dari satu panel.
                    </p>
                </div>
            </div>
        </div>

        <!-- Kartu Metrik -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <div class="bg-white rounded-3xl p-6 border border-slate-200/70 shadow-xs hover:shadow-md hover:border-teal-200 transition-all">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Total Staf</span>
                    <span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-teal-50 text-teal-700">Tim</span>
                </div>
                <div class="mt-3 text-3xl font-extrabold text-slate-900">{{ $totalStaff ?? 0 }}</div>
                <p class="mt-1 text-xs text-slate-500">Chef, Kasir & Admin aktif</p>
            </div>

            <div class="bg-white rounded-3xl p-6 border border-slate-200/70 shadow-xs hover:shadow-md hover:border-teal-200 transition-all">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Kategori Menu</span>
                    <span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-sky-50 text-sky-700">Katalog</span>
                </div>
                <div class="mt-3 text-3xl font-extrabold text-slate-900">{{ $totalCategories ?? 0 }}</div>
                <p class="mt-1 text-xs text-slate-500">Pengelompokan hidangan</p>
            </div>

            <div class="bg-white rounded-3xl p-6 border border-slate-200/70 shadow-xs hover:shadow-md hover:border-teal-200 transition-all">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Item Menu</span>
                    <span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-emerald-50 text-emerald-700">Menu</span>
                </div>
                <div class="mt-3 text-3xl font-extrabold text-slate-900">{{ $totalMenus ?? 0 }}</div>
                <p class="mt-1 text-xs text-slate-500">Hidangan & minuman terdaftar</p>
            </div>

            <div class="bg-white rounded-3xl p-6 border border-slate-200/70 shadow-xs hover:shadow-md hover:border-teal-200 transition-all">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Meja QR Code</span>
                    <span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-amber-50 text-amber-700">QR Order</span>
                </div>
                <div class="mt-3 text-3xl font-extrabold text-slate-900">{{ $totalTables ?? 0 }}</div>
                <p class="mt-1 text-xs text-slate-500">Meja siap pemesanan mandiri</p>
            </div>
        </div>

        <!-- Pintasan Modul -->
        <div class="bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/70 shadow-xs">
            <div class="flex items-center justify-between mb-5">
                <div>
                    <h3 class="text-base font-extrabold text-slate-900">Akses Cepat Modul</h3>
                    <p class="text-xs text-slate-500 mt-0.5">Langsung masuk ke modul utama pengelolaan Restoranku</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <a href="#" class="group p-5 rounded-2xl bg-slate-50/80 hover:bg-teal-50/60 border border-slate-200/70 hover:border-teal-300 transition-all">
                    <span class="block text-sm font-bold text-slate-900 group-hover:text-teal-700 transition-colors">Role & Staff Management</span>
                    <span class="block text-xs text-slate-500 mt-1">Kelola hak akses peran dan akun staf restoran</span>
                </a>

                <a href="#" class="group p-5 rounded-2xl bg-slate-50/80 hover:bg-teal-50/60 border border-slate-200/70 hover:border-teal-300 transition-all">
                    <span class="block text-sm font-bold text-slate-900 group-hover:text-teal-700 transition-colors">Category & Menu Management</span>
                    <span class="block text-xs text-slate-500 mt-1">Atur kategori, harga, foto, dan ketersediaan menu</span>
                </a>

                <a href="#" class="group p-5 rounded-2xl bg-slate-50/80 hover:bg-teal-50/60 border border-slate-200/70 hover:border-teal-300 transition-all">
                    <span class="block text-sm font-bold text-slate-900 group-hover:text-teal-700 transition-colors">Orders & Table QR</span>
                    <span class="block text-xs text-slate-500 mt-1">Pantau pesanan masuk dan kelola QR Code meja</span>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>