<div class="w-full max-w-md">
    <div class="bg-white/80 backdrop-blur-xl border border-white/40 shadow-2xl rounded-3xl p-8 transition-all duration-300 hover:shadow-primary-soft">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Dokkan Smart Admin</h1>
            <p class="text-gray-500 mt-2">مرحباً بك مجدداً، سجل دخولك للمتابعة</p>
        </div>

        <form wire:submit="login" class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">رقم الهاتف العراقي</label>
                <div class="relative group">
                    <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-gray-400 group-focus-within:text-blue-500 transition-colors">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </span>
                    <input 
                        wire:model="phone" 
                        type="tel" 
                        placeholder="07XXXXXXXX" 
                        class="w-full pr-12 pl-4 py-3 bg-gray-50/50 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all outline-none"
                    >
                </div>
                @error('phone') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">كلمة المرور</label>
                <div class="relative group">
                    <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-gray-400 group-focus-within:text-blue-500 transition-colors">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 00-2 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </span>
                    <input 
                        wire:model="password" 
                        type="password" 
                        placeholder="••••••••" 
                        class="w-full pr-12 pl-4 py-3 bg-gray-50/50 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all outline-none"
                    >
                </div>
                @error('password') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center space-x-2 space-x-reverse cursor-pointer">
                    <input type="checkbox" wire:model="remember" class="w-5 h-5 rounded text-blue-600 focus:ring-blue-500">
                    <span class="text-sm text-gray-600">تذكرني</span>
                </label>
                <a href="#" class="text-sm text-blue-600 hover:text-blue-800 transition-colors">نسيت كلمة المرور؟</a>
            </div>

            <button 
                type="submit" 
                class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-bold py-4 rounded-2xl shadow-lg shadow-blue-500/30 hover:shadow-blue-500/40 hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 flex items-center justify-center space-x-2 space-x-reverse"
            >
                <span>دخول</span>
                <svg wire:loading.remove class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                </svg>
                <div wire:loading class="h-5 w-5 border-2 border-white/30 border-t-white rounded-full animate-spin"></div>
            </button>
        </form>

        <div class="mt-8 pt-8 border-t border-gray-100 text-center">
            <p class="text-sm text-gray-500">مشروع دوكان - جميع الحقوق محفوظة © 2026</p>
        </div>
    </div>
</div>
