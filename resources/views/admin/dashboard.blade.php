<x-admin-layout>
    <x-slot:title>نبذة عامة</x-slot:title>
    
    <div class="space-y-12 shrink-0">
        <!-- Hero Section: Premium Welcome Card -->
        <div class="group relative bg-gradient-to-br from-indigo-700 via-indigo-600 to-blue-600 rounded-[3rem] p-16 text-white overflow-hidden shadow-2xl shadow-indigo-500/30 transition-all duration-700 hover:shadow-indigo-500/50">
            <div class="relative z-10 max-w-3xl animate-fade-up">
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full mb-8 border border-white/20">
                    <span class="h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span class="text-[10px] font-black tracking-widest uppercase">النسخة الذكية 2026</span>
                </div>
                <h1 class="text-6xl font-black mb-6 leading-tight tracking-tight">مرحباً بك، <span class="bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent">{{ auth()->user()->name }}</span>!</h1>
                <p class="text-indigo-100 text-xl font-medium leading-relaxed max-w-xl">أهلاً بك في نظام دوكان المتكامل للإدارة. كل ما تحتاجه لإدارة موظفيك وحساباتك متاح الآن بين يديك بلمسة واحدة.</p>
                
                <div class="mt-12 flex items-center gap-6">
                    <button class="bg-white text-indigo-600 px-10 py-5 rounded-2xl font-black text-lg shadow-xl hover:shadow-2xl hover:-translate-y-1 transition-all">ابدأ العمل</button>
                    <button class="bg-white/10 backdrop-blur-md text-white border border-white/20 px-10 py-5 rounded-2xl font-black text-lg hover:bg-white/20 transition-all">دليل الاستخدام</button>
                </div>
            </div>
            
            <!-- Floating Decorative Elements -->
            <div class="absolute -top-12 -right-12 h-64 w-64 bg-white/10 rounded-full blur-3xl animate-float"></div>
            <div class="absolute top-1/2 -right-24 h-96 w-96 bg-blue-400/20 rounded-full blur-3xl animate-float" style="animation-delay: -2s"></div>
            
            <!-- Abstract Graphic -->
            <div class="absolute right-20 bottom-0 opacity-20 pointer-events-none group-hover:scale-110 transition-transform duration-1000">
                <svg class="h-96 w-96" viewBox="0 0 200 200" fill="none">
                    <circle cx="100" cy="100" r="80" stroke="white" stroke-width="0.5" stroke-dasharray="10 10" />
                    <circle cx="100" cy="100" r="60" stroke="white" stroke-width="2" opacity="0.5" />
                </svg>
            </div>
        </div>

        <!-- Bento Grid Dashboard Sections -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            
            <!-- Card 1: Main Action (Large) -->
            <div class="lg:col-span-2 bg-white rounded-[2.5rem] p-10 border border-slate-100 shadow-xl shadow-slate-200/50 flex flex-col justify-between transition-all hover:shadow-2xl hover:-translate-y-1 group">
                <div class="flex items-center justify-between mb-8">
                    <div class="h-16 w-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <span class="px-4 py-2 bg-blue-50 text-blue-600 text-[10px] font-black rounded-full uppercase">قيد التشغيل</span>
                </div>
                <div>
                    <h3 class="text-3xl font-black text-slate-800">إدارة القوى العاملة</h3>
                    <p class="text-slate-500 mt-2 font-medium leading-relaxed">تحكم في ملفات الموظفين، الأدوار، والصلاحيات الذكية بكل تفاصيلها.</p>
                </div>
                <div class="mt-10">
                    <a href="/admin/employees" class="inline-flex items-center gap-2 text-indigo-600 font-black group">
                        <span>انتقل لإدارة الموظفين</span>
                        <svg class="h-5 w-5 transform group-hover:-translate-x-2 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Card 2: Status (Small / Vertical) -->
            <div class="bg-indigo-50/50 rounded-[2.5rem] p-10 border border-indigo-100 flex flex-col justify-between group overflow-hidden relative">
                <div class="relative z-10">
                    <p class="text-indigo-400 text-xs font-black uppercase tracking-widest mb-4">قاعدة البيانات</p>
                    <h3 class="text-2xl font-black text-slate-800">الاستقرار</h3>
                    <div class="mt-6 flex items-baseline gap-2">
                        <span class="text-5xl font-black text-slate-800 tracking-tighter">99.9</span>
                        <span class="text-slate-400 font-bold">%</span>
                    </div>
                    <p class="text-slate-400 text-xs mt-2">نظام البيانات يعمل بكفاءة عالية</p>
                </div>
                <div class="absolute -bottom-10 -right-10 opacity-10 transform scale-150 rotate-12 group-hover:rotate-0 transition-transform duration-1000">
                    <svg class="h-32 w-32" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4 7v10c0 2.21 3.58 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.58 4 8 4s8-1.79 8-4M4 7c0-2.21 3.58-4 8-4s8 1.79 8 4m0 5c0 2.21-3.58 4-8 4s-8-1.79-8-4" />
                    </svg>
                </div>
            </div>

            <!-- Card 3: Finance (Vertical Gradient) -->
            <div class="bg-gradient-to-b from-emerald-600 to-emerald-700 rounded-[2.5rem] p-10 text-white shadow-xl shadow-emerald-500/20 group cursor-not-allowed">
                <div class="h-12 w-12 bg-white/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-black tracking-tight">النظام المالي</h3>
                <p class="text-emerald-100/70 text-sm mt-2">سيتم تفعيل هذا القسم قريباً لمتابعة الحسابات.</p>
                <div class="mt-12 h-1 w-full bg-white/20 rounded-full overflow-hidden">
                    <div class="h-full bg-white w-1/3 rounded-full animate-pulse"></div>
                </div>
            </div>

        </div>
    </div>
</x-admin-layout>
