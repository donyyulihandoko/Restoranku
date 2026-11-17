<x-guest-layout>
    <div class="mb-6">
        <!-- Graphic Icon -->
        <div class="w-12 h-12 rounded-2xl bg-teal-50 border border-teal-100 flex items-center justify-center text-teal-600 mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
            </svg>
        </div>

        <h2 class="text-2xl font-bold text-slate-900 tracking-tight">Lupa Kata Sandi? 🔑</h2>
        <p class="mt-1.5 text-xs sm:text-sm text-slate-500 leading-relaxed">
            Tidak masalah. Masukkan alamat email staf kamu dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi.
        </p>
    </div>

    <!-- Session Status (Pesan sukses link terkirim) -->
    <x-auth-session-status class="mb-5 p-3.5 bg-emerald-50 border border-emerald-200/80 rounded-2xl text-xs font-semibold text-emerald-700" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email Staf')" class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5" />
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" /></svg>
                </div>
                <x-text-input id="email" class="block w-full pl-10 pr-4 py-3 rounded-2xl border-slate-200/80 bg-slate-50/50 focus:bg-white focus:border-teal-500 focus:ring-4 focus:ring-teal-500/10 text-sm transition-all duration-200" type="email" name="email" :value="old('email')" required autofocus placeholder="nama@restoranku.com" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <button type="submit" class="w-full flex justify-center items-center gap-2 py-3.5 px-4 rounded-2xl text-sm font-bold text-white bg-gradient-to-r from-teal-600 to-teal-500 hover:from-teal-700 hover:to-teal-600 focus:outline-none focus:ring-4 focus:ring-teal-500/25 shadow-lg shadow-teal-600/25 transition-all duration-200 active:scale-[0.98]">
                <span>Kirim Tautan Reset</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
            </button>
        </div>

        <!-- Back to Login -->
        <div class="mt-6 text-center border-t border-slate-100 pt-5">
            <a href="{{ route('login') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-slate-600 hover:text-teal-600 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                <span>Kembali ke Halaman Login</span>
            </a>
        </div>
    </form>
</x-guest-layout>