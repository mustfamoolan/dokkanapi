<aside class="hidden md:flex flex-col w-72 bg-white border-l border-slate-200">
    <div class="h-20 flex items-center px-8 border-b border-slate-100">
        <h2 class="text-2xl font-bold text-slate-800">Dokkan <span class="text-blue-600">Admin</span></h2>
    </div>
    <nav class="flex-1 overflow-y-auto py-8">
        <div class="px-4 space-y-1">
            <a href="/admin/dashboard" class="flex items-center px-4 py-3 text-blue-600 bg-blue-50 rounded-2xl group transition-all">
                <svg class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="font-medium">الرئيسية</span>
            </a>

            <a href="/admin/employees" class="flex items-center px-4 py-3 text-slate-600 hover:bg-slate-50 rounded-2xl group transition-all">
                <svg class="h-6 w-6 ml-3 text-slate-400 group-hover:text-blue-600 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <span class="font-medium">إدارة الموظفين</span>
            </a>

            <div class="pt-4 pb-2 px-4">
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-widest">الأقسام</span>
            </div>

            <a href="#" class="flex items-center px-4 py-3 text-slate-600 hover:bg-slate-50 rounded-2xl group transition-all opacity-50 cursor-not-allowed">
                <svg class="h-6 w-6 ml-3 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <span class="font-medium">المحاسبة المالية</span>
            </a>
        </div>
    </nav>
    <div class="p-6 border-t border-slate-100">
        <form method="POST" action="/logout">
            @csrf
            <button class="flex items-center w-full px-4 py-3 text-red-600 hover:bg-red-50 rounded-2xl transition-all">
                <svg class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span class="font-medium">تسجيل الخروج</span>
            </button>
        </form>
    </div>
</aside>
