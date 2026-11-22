<div>
    <header class="h-16 bg-white border-b border-slate-200 sticky top-0 z-30 flex items-center justify-between px-4 sm:px-6">
            <div class="flex items-center gap-3">
                        <!-- Toggle Mobile Sidebar -->
                        <button @click="sidebarOpen = !sidebarOpen" class="lg:hidden p-2 text-slate-600 hover:bg-slate-100 rounded-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                        </button>
                        
                        {{-- @if (isset($header))
                            <div class="font-bold text-lg text-slate-800">
                                {{ $header }}
                            </div>
                        @endif --}}
            </div>
    </header>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>