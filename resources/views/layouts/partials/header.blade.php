<header class="sticky top-0 z-10 bg-white/80 backdrop-blur-md border-b border-slate-100 h-20 px-8 flex items-center justify-between">
    <div class="flex items-center space-x-4 space-x-reverse">
        <h2 class="text-xl font-semibold text-slate-800">{{ $title ?? 'لوحة التحكم' }}</h2>
    </div>

    <div class="flex items-center space-x-6 space-x-reverse">
        <!-- Search -->
        <div class="hidden lg:flex items-center bg-slate-100 rounded-2xl px-4 py-2 w-72 transition-all focus-within:ring-2 focus-within:ring-blue-500/10 focus-within:bg-white border border-transparent focus-within:border-blue-500">
            <svg class="h-5 w-5 text-slate-400 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <input type="text" placeholder="بحث سريع..." class="bg-transparent border-none focus:ring-0 text-sm w-full outline-none">
        </div>

        <!-- Notifications -->
        <button class="relative p-2 text-slate-500 hover:bg-slate-100 rounded-xl transition-all">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
            <span class="absolute top-2 right-2 flex h-2 w-2 rounded-full bg-red-500 ring-2 ring-white"></span>
        </button>

        <!-- User Profile -->
        <div class="flex items-center space-x-3 space-x-reverse border-r border-slate-100 pr-6">
            <div class="text-left">
                <p class="text-sm font-bold text-slate-800">{{ auth()->user()->name ?? 'المدير العام' }}</p>
                <p class="text-xs text-slate-400">{{ auth()->user()->employee_id ?? 'a1' }}</p>
            </div>
            <div class="h-11 w-11 rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white font-bold text-lg shadow-lg shadow-blue-500/20">
                {{ substr(auth()->user()->name ?? 'A', 0, 1) }}
            </div>
        </div>
    </div>
</header>
