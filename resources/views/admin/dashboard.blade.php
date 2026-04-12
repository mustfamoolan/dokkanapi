<x-admin-layout>
    <x-slot:title>الرئيسية</x-slot:title>
    
    <div class="space-y-8 animate-in fade-in slide-in-from-bottom-4 duration-700">
        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 rounded-[2.5rem] p-12 text-white shadow-2xl shadow-blue-500/20 relative overflow-hidden">
            <div class="relative z-10 max-w-2xl">
                <h1 class="text-4xl font-black mb-4">مرحباً بك، {{ auth()->user()->name }}! 👋</h1>
                <p class="text-blue-100 text-lg leading-relaxed">هذه هي لوحة التحكم الذكية لمشروع دوكان. يمكنك من هنا البدء في إدارة الموظفين، الحسابات المالية، ودعم العملاء بكل سهولة.</p>
            </div>
            
            <!-- Abstract background pattern -->
            <div class="absolute -top-24 -right-24 h-96 w-96 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 h-96 w-96 bg-blue-400/20 rounded-full blur-3xl"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Quick Link Card -->
            <a href="/admin/employees" class="group bg-white p-8 rounded-[2rem] border border-slate-100 shadow-xl shadow-slate-200/50 flex items-center justify-between transition-all hover:scale-[1.02] hover:shadow-2xl">
                <div class="flex items-center space-x-6 space-x-reverse">
                    <div class="h-16 w-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-slate-800">إدارة الموظفين</h4>
                        <p class="text-slate-400 mt-1">عرض وتعديل صلاحيات فريق العمل</p>
                    </div>
                </div>
                <svg class="h-6 w-6 text-slate-300 group-hover:text-blue-600 transition-all transform group-hover:-translate-x-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>

            <!-- Placeholder Card -->
            <div class="bg-slate-50 border-2 border-dashed border-slate-200 p-8 rounded-[2rem] flex flex-col items-center justify-center text-center opacity-60">
                <div class="h-16 w-16 bg-white rounded-2xl flex items-center justify-center mb-4 text-slate-300 shadow-sm">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h4 class="text-lg font-bold text-slate-400">قسم جديد قريباً</h4>
                <p class="text-slate-400 text-sm">سيتم إضافة المحاسبة المالية والدعم الفني هنا</p>
            </div>
        </div>
    </div>
</x-admin-layout>
