<header class="sticky top-0 z-40 bg-white/40 backdrop-blur-xl border-b border-white/40 h-24 px-12 flex items-center justify-between">
    <div class="flex items-center gap-12">
        <h2 class="text-2xl font-black text-slate-800 tracking-tight">{{ $title ?? 'لوحة التحكم' }}</h2>
        
        <!-- Search -->
        <div class="hidden lg:flex items-center bg-white/50 border border-slate-200/50 rounded-2xl px-6 py-3 w-96 transition-all focus-within:ring-4 focus-within:ring-indigo-500/10 focus-within:bg-white focus-within:border-indigo-500 group shadow-sm">
            <svg class="h-5 w-5 text-slate-400 ml-3 group-focus-within:text-indigo-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <input type="text" placeholder="بحث ذكي عن الموظفين..." class="bg-transparent border-none focus:ring-0 text-sm w-full outline-none placeholder:text-slate-400 font-medium">
        </div>
    </div>

    <div class="flex items-center gap-8">
        <!-- Fullscreen Toggle -->
        <button onclick="document.documentElement.requestFullscreen()" class="p-4 text-slate-500 hover:bg-white/80 hover:text-indigo-600 rounded-2xl transition-all shadow-sm hover:shadow-md border border-transparent hover:border-white/50">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
            </svg>
        </button>

        <!-- Notifications -->
        <button class="relative p-4 text-slate-500 hover:bg-white/80 hover:text-indigo-600 rounded-2xl transition-all shadow-sm hover:shadow-md border border-transparent hover:border-white/50 group">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
            <span class="absolute top-4 right-4 flex h-3 w-3 rounded-full bg-red-500 ring-4 ring-white group-hover:scale-110 transition-transform"></span>
        </button>

        <!-- User Profile -->
        <div class="flex items-center gap-6 pr-8 border-r border-slate-200/50">
            <div class="text-left">
                <p class="text-sm font-black text-slate-800">{{ auth()->user()->name ?? 'المدير العام' }}</p>
                <div class="flex items-center gap-2 justify-end">
                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    <p class="text-[10px] font-bold text-slate-400 tracking-wider">ONLINE</p>
                </div>
            </div>
            <div class="h-14 w-14 rounded-2xl bg-gradient-to-br from-indigo-500 to-indigo-700 flex items-center justify-center text-white font-black text-xl shadow-xl shadow-indigo-500/30 border-2 border-white transform transition-transform hover:scale-105 cursor-pointer">
                {{ substr(auth()->user()->name ?? 'M', 0, 1) }}
            </div>
        </div>
    </div>
</header>
