<div class="space-y-12 animate-fade-up">
    <!-- Premium Stats Cards (Bento Style) -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div class="md:col-span-2 bento-card bg-indigo-600 rounded-[2.5rem] p-10 text-white shadow-2xl shadow-indigo-500/30 flex items-center justify-between">
            <div>
                <p class="text-indigo-100 text-sm font-bold uppercase tracking-widest mb-1">إجمالي فريق العمل</p>
                <h3 class="text-5xl font-black">{{ \App\Models\User::count() }}</h3>
                <p class="text-indigo-200 text-xs mt-4">موظف مسجل حالياً في النظام</p>
            </div>
            <div class="h-20 w-20 bg-white/10 backdrop-blur-md rounded-3xl flex items-center justify-center border border-white/20">
                <svg class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </div>
        </div>
        
        <div class="bento-card bg-white rounded-[2.5rem] p-8 border border-slate-100 shadow-xl shadow-slate-200/50 flex flex-col justify-between">
            <div class="h-12 w-12 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-6">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div>
                <h4 class="text-3xl font-black text-slate-800">{{ \App\Models\User::where('status', 'active')->count() }}</h4>
                <p class="text-slate-400 text-xs font-bold uppercase mt-1">نشط الآن</p>
            </div>
        </div>

        <div class="bento-card bg-white rounded-[2.5rem] p-8 border border-slate-100 shadow-xl shadow-slate-200/50 flex flex-col justify-between">
            <div class="h-12 w-12 bg-rose-50 text-rose-600 rounded-2xl flex items-center justify-center mb-6">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                </svg>
            </div>
            <div>
                <h4 class="text-3xl font-black text-slate-800">{{ \App\Models\User::where('status', 'suspended')->count() }}</h4>
                <p class="text-slate-400 text-xs font-bold uppercase mt-1">معلق </p>
            </div>
        </div>
    </div>

    <!-- Main Table Container (Premium High-Depth) -->
    <div class="bg-white rounded-[3rem] border border-slate-100 shadow-[0_32px_64px_-16px_rgba(0,0,0,0.08)] overflow-hidden transition-all duration-500">
        <!-- Table Header Actions -->
        <div class="p-12 border-b border-slate-50 flex flex-col lg:flex-row lg:items-center justify-between gap-8">
            <div class="max-w-md">
                <h3 class="text-3xl font-black text-slate-800 tracking-tight">قائمة الموظفين</h3>
                <p class="text-slate-400 font-medium mt-2 leading-relaxed">تحكم كامل ببيانات فريق العمل، الصلاحيات، وحالة النشاط الرقمي لكل موظف.</p>
            </div>
            
            <div class="flex items-center gap-6">
                <div class="relative group">
                    <span class="absolute inset-y-0 right-0 flex items-center pr-6 text-slate-400 group-focus-within:text-indigo-600 transition-colors">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </span>
                    <input 
                        wire:model.live.debounce.300ms="search"
                        type="text" 
                        placeholder="ابحث بالاسم، المعرف، أو الرقم..." 
                        class="pr-16 pl-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 outline-none w-80 font-medium transition-all"
                    >
                </div>
                
                <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-2xl font-black shadow-xl shadow-indigo-600/20 transition-all flex items-center gap-3 active:scale-95">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span>إضافة موظف</span>
                </button>
            </div>
        </div>

        <!-- High-Fidelity Table -->
        <div class="overflow-x-auto">
            <table class="w-full text-right">
                <thead>
                    <tr class="bg-slate-50/50">
                        <th class="px-12 py-6 text-xs font-black text-slate-400 uppercase tracking-widest text-right">الموظف</th>
                        <th class="px-12 py-6 text-xs font-black text-slate-400 uppercase tracking-widest text-right">المعرف الرقمي</th>
                        <th class="px-12 py-6 text-xs font-black text-slate-400 uppercase tracking-widest text-right">الرقم الشخصي</th>
                        <th class="px-12 py-6 text-xs font-black text-slate-400 uppercase tracking-widest text-right">الحالة الآن</th>
                        <th class="px-12 py-6 text-xs font-black text-slate-400 uppercase tracking-widest text-center">العمليات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    @forelse($employees as $employee)
                        <tr class="hover:bg-slate-50/30 transition-all duration-300 group">
                            <td class="px-12 py-8">
                                <div class="flex items-center gap-6">
                                    <div class="h-16 w-16 rounded-[1.25rem] bg-gradient-to-br from-slate-100 to-slate-200 flex items-center justify-center text-slate-500 font-black text-2xl shadow-inner group-hover:from-indigo-500 group-hover:to-indigo-600 group-hover:text-white transition-all duration-500">
                                        {{ substr($employee->name, 0, 1) }}
                                    </div>
                                    <div>
                                        <p class="text-lg font-black text-slate-800 tracking-tight transition-colors group-hover:text-indigo-600">{{ $employee->name }}</p>
                                        <p class="text-[10px] font-bold text-slate-400 mt-1 uppercase tracking-widest">انضم {{ $employee->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-12 py-8">
                                <span class="px-4 py-2 bg-slate-900 text-white rounded-xl font-mono text-xs font-black tracking-widest">{{ $employee->employee_id }}</span>
                            </td>
                            <td class="px-12 py-8 font-black text-slate-600 tracking-tighter">{{ $employee->phone }}</td>
                            <td class="px-12 py-8">
                                @if($employee->status === 'active')
                                    <div class="flex items-center gap-2">
                                        <span class="h-2 w-2 rounded-full bg-emerald-500 shadow-[0_0_12px_rgba(16,185,129,0.5)]"></span>
                                        <span class="text-xs font-black text-emerald-600 uppercase tracking-widest">نشط بالكامل</span>
                                    </div>
                                @else
                                    <div class="flex items-center gap-2">
                                        <span class="h-2 w-2 rounded-full bg-rose-500"></span>
                                        <span class="text-xs font-black text-rose-500 uppercase tracking-widest">معلق حالياً</span>
                                    </div>
                                @endif
                            </td>
                            <td class="px-12 py-8">
                                <div class="flex items-center justify-center gap-4 opacity-100 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300">
                                    <button class="p-3 bg-white text-slate-400 hover:text-indigo-600 rounded-xl shadow-sm border border-slate-100 hover:border-indigo-200 transition-all" title="تعديل">
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </button>
                                    
                                    <button 
                                        wire:click="toggleStatus({{ $employee->id }})"
                                        class="p-3 {{ $employee->status === 'active' ? 'bg-rose-50 text-rose-500 border-rose-100 hover:bg-rose-500 hover:text-white' : 'bg-emerald-50 text-emerald-600 border-emerald-100 hover:bg-emerald-600 hover:text-white' }} rounded-xl shadow-sm border transition-all"
                                        title="{{ $employee->status === 'active' ? 'تعليق فوري' : 'تفعيل فوري' }}"
                                    >
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-12 py-32 text-center">
                                <div class="flex flex-col items-center">
                                    <div class="h-24 w-24 bg-slate-50 rounded-[2rem] flex items-center justify-center text-slate-200 mb-6">
                                        <svg class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </div>
                                    <h4 class="text-2xl font-black text-slate-300">لا يوجد موظفون حالياً</h4>
                                    <p class="text-slate-400 mt-2 font-medium">ابدأ بإضافة أول موظف لفريق عملك الآن.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        @if($employees->hasPages())
            <div class="px-12 py-8 bg-slate-50/50 border-t border-slate-50">
                {{ $employees->links() }}
            </div>
        @endif
    </div>
</div>
