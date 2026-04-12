<div class="space-y-8 animate-in fade-in slide-in-from-bottom-4 duration-700">
    <!-- Stats Header -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm transition-all hover:shadow-md">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">إجمالي الموظفين</p>
                    <h3 class="text-3xl font-bold mt-1">{{ \App\Models\User::count() }}</h3>
                </div>
                <div class="h-14 w-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm transition-all hover:shadow-md">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">نشط حالياً</p>
                    <h3 class="text-3xl font-bold mt-1 text-green-600">{{ \App\Models\User::where('status', 'active')->count() }}</h3>
                </div>
                <div class="h-14 w-14 bg-green-50 text-green-600 rounded-2xl flex items-center justify-center">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm transition-all hover:shadow-md">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">حسابات معلقة</p>
                    <h3 class="text-3xl font-bold mt-1 text-red-600">{{ \App\Models\User::where('status', 'suspended')->count() }}</h3>
                </div>
                <div class="h-14 w-14 bg-red-50 text-red-600 rounded-2xl flex items-center justify-center">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Card -->
    <div class="bg-white rounded-[2rem] border border-slate-100 shadow-xl shadow-slate-200/50 overflow-hidden">
        <div class="p-8 border-b border-slate-100 flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h3 class="text-xl font-bold text-slate-800">قائمة الموظفين</h3>
                <p class="text-slate-400 text-sm mt-1">إدارة وحذف وصلاحيات الموظفين في النظام</p>
            </div>
            
            <div class="flex items-center gap-4">
                <div class="relative group">
                    <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-slate-400">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </span>
                    <input 
                        wire:model.live.debounce.300ms="search"
                        type="text" 
                        placeholder="ابحث بالاسم أو المعرف..." 
                        class="pr-12 pl-4 py-3 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-2 focus:ring-blue-500/10 focus:border-blue-500 outline-none w-72 transition-all"
                    >
                </div>
                
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-2xl font-bold transition-all flex items-center gap-2">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    <span>إضافة موظف</span>
                </button>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-right">
                <thead>
                    <tr class="bg-slate-50/50">
                        <th class="px-8 py-5 text-sm font-bold text-slate-400 uppercase tracking-wider">الموظف</th>
                        <th class="px-8 py-5 text-sm font-bold text-slate-400 uppercase tracking-wider">المعرف (ID)</th>
                        <th class="px-8 py-5 text-sm font-bold text-slate-400 uppercase tracking-wider">رقم الهاتف</th>
                        <th class="px-8 py-5 text-sm font-bold text-slate-400 uppercase tracking-wider">الحالة</th>
                        <th class="px-8 py-5 text-sm font-bold text-slate-400 uppercase tracking-wider text-center">الإجراءات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    @forelse($employees as $employee)
                        <tr class="hover:bg-slate-50/30 transition-colors">
                            <td class="px-8 py-6">
                                <div class="flex items-center gap-4">
                                    <div class="h-12 w-12 rounded-2xl bg-slate-100 flex items-center justify-center text-slate-600 font-bold text-lg">
                                        {{ substr($employee->name, 0, 1) }}
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-800">{{ $employee->name }}</p>
                                        <p class="text-xs text-slate-400 mt-1">انضم في {{ $employee->created_at->format('Y/m/d') }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-6">
                                <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg font-mono text-sm font-bold">{{ $employee->employee_id }}</span>
                            </td>
                            <td class="px-8 py-6 font-medium text-slate-600">{{ $employee->phone }}</td>
                            <td class="px-8 py-6">
                                @if($employee->status === 'active')
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-green-50 text-green-600 ring-1 ring-green-600/20">
                                        نشط
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-red-50 text-red-600 ring-1 ring-red-600/20">
                                        معلق
                                    </span>
                                @endif
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition-all" title="تعديل">
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </button>
                                    
                                    <button 
                                        wire:click="toggleStatus({{ $employee->id }})"
                                        class="p-2 {{ $employee->status === 'active' ? 'text-slate-400 hover:text-red-600 hover:bg-red-50' : 'text-slate-400 hover:text-green-600 hover:bg-green-50' }} rounded-xl transition-all"
                                        title="{{ $employee->status === 'active' ? 'إيقاف الحساب' : 'تفعيل الحساب' }}"
                                    >
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-8 py-20 text-center">
                                <div class="flex flex-col items-center">
                                    <svg class="h-16 w-16 text-slate-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                    </svg>
                                    <p class="mt-4 text-slate-400 font-medium">لم يتم العثور على موظفين</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        @if($employees->hasPages())
            <div class="px-8 py-6 bg-slate-50/50 border-t border-slate-100">
                {{ $employees->links() }}
            </div>
        @endif
    </div>
</div>
