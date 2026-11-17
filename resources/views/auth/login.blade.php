<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="mb-7">
        <h2 class="text-2xl font-bold text-slate-900 tracking-tight">Selamat Datang! 👋</h2>
        <p class="mt-1.5 text-sm text-slate-500 leading-relaxed">Masukkan kredensial akun kamu untuk mengakses dashboard Restoranku.</p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5" />
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" /></svg>
                </div>
                <x-text-input id="email" class="block w-full pl-10 pr-4 py-3 rounded-2xl border-slate-200/80 bg-slate-50/50 focus:bg-white focus:border-teal-500 focus:ring-4 focus:ring-teal-500/10 text-sm transition-all duration-200" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="nama@restoranku.com" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
        </div>

        <!-- Password -->
        <div>
            <div class="flex items-center justify-between mb-1.5">
                <x-input-label for="password" :value="__('Kata Sandi')" class="text-xs font-bold text-slate-700 uppercase tracking-wider" />
                @if (Route::has('password.request'))
                    <a class="text-xs font-semibold text-teal-600 hover:text-teal-700 transition-colors" href="{{ route('password.request') }}">
                        Lupa kata sandi?
                    </a>
                @endif
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                </div>
                <x-text-input id="password" class="block w-full pl-10 pr-4 py-3 rounded-2xl border-slate-200/80 bg-slate-50/50 focus:bg-white focus:border-teal-500 focus:ring-4 focus:ring-teal-500/10 text-sm transition-all duration-200" type="password" name="password" required autocomplete="current-password" placeholder="••••••••" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between pt-1">
            <label for="remember_me" class="inline-flex items-center cursor-pointer select-none">
                <input id="remember_me" type="checkbox" class="w-4 h-4 rounded-md border-slate-300 text-teal-600 focus:ring-teal-500/20" name="remember">
                <span class="ms-2.5 text-xs font-medium text-slate-600">Ingat saya di perangkat ini</span>
            </label>
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <button type="submit" class="w-full flex justify-center items-center gap-2 py-3.5 px-4 rounded-2xl text-sm font-bold text-white bg-gradient-to-r from-teal-600 to-teal-500 hover:from-teal-700 hover:to-teal-600 focus:outline-none focus:ring-4 focus:ring-teal-500/25 shadow-lg shadow-teal-600/25 transition-all duration-200 active:scale-[0.98]">
                <span>Masuk ke Dashboard</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
            </button>
        </div>

        <!-- Navigation Link -->
        {{-- <div class="mt-6 text-center border-t border-slate-100 pt-5">
            <p class="text-xs font-medium text-slate-500">
                Belum memiliki akun?
                <a href="{{ route('register') }}" class="font-bold text-teal-600 hover:text-teal-700 transition-colors ml-1">
                    Daftar Akun Baru
                </a>
            </p>
        </div> --}}
    </form>
</x-guest-layout>