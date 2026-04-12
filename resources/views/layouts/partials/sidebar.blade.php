<aside class="fixed right-6 top-6 bottom-6 w-72 glass-effect rounded-[2.5rem] z-50 flex flex-col overflow-hidden transition-all duration-500 hover:w-80 group">
    <!-- Logo Section -->
    <div class="p-8 pb-4">
        <div class="flex items-center gap-4">
            <div class="h-12 w-12 bg-gradient-to-br from-indigo-600 to-blue-500 rounded-2xl flex items-center justify-center shadow-lg shadow-indigo-500/30">
                <span class="text-white font-black text-xl">D</span>
            </div>
            <div class="opacity-100 group-hover:opacity-100 transition-opacity">
                <h2 class="text-xl font-black tracking-tight text-slate-800">DOKKAN</h2>
                <span class="text-[10px] font-bold text-indigo-600 tracking-widest uppercase">Admin System</span>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-4 py-8 overflow-y-auto space-y-2">
        <a href="/admin/dashboard" class="flex items-center gap-4 px-6 py-4 rounded-2xl transition-all duration-300 {{ request()->is('admin/dashboard') ? 'bg-indigo-600 shadow-xl shadow-indigo-600/30 text-white' : 'text-slate-500 hover:bg-slate-50' }}">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span class="font-bold">لوحة التحكم</span>
        </a>

        <a href="/admin/employees" class="flex items-center gap-4 px-6 py-4 rounded-2xl transition-all duration-300 {{ request()->is('admin/employees') ? 'bg-indigo-600 shadow-xl shadow-indigo-600/30 text-white' : 'text-slate-500 hover:bg-slate-50' }}">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <span class="font-bold">إدارة الموظفين</span>
        </a>

        <div class="pt-6 pb-2 px-6">
            <span class="text-[10px] font-black text-slate-300 uppercase tracking-widest">المزيد قريباً</span>
        </div>

        <a href="#" class="flex items-center gap-4 px-6 py-4 rounded-2xl text-slate-300 cursor-not-allowed opacity-50">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
            </svg>
            <span class="font-bold">الحسابات المالية</span>
        </a>
    </nav>

    <!-- User Profile & Logout -->
    <div class="p-6 border-t border-slate-100">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="w-full flex items-center gap-4 px-6 py-4 rounded-2xl text-red-500 hover:bg-red-50 transition-all duration-300">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span class="font-bold">خروج</span>
            </button>
        </form>
    </div>
</aside>
