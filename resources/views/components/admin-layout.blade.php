<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Dokkan Admin' }}</title>
    <!-- Google Fonts: Outfit & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&family=Outfit:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-[#f0f2f5] min-h-screen font-sans antialiased text-slate-800 overflow-x-hidden selection:bg-indigo-500 selection:text-white">
    <!-- Main Layout Container (Full Width) -->
    <div class="flex h-screen overflow-hidden">
        
        <!-- Sidebar Navigation (Floating Glass) -->
        @include('layouts.partials.sidebar')

        <!-- Main Content Area (Fluid / Full Width) -->
        <main class="flex-1 mr-80 ml-6 my-6 overflow-y-auto relative glass-effect rounded-[2.5rem] focus:outline-none transition-all duration-500">
            <!-- Glass Header -->
            @include('layouts.partials.header')

            <!-- Dashboard Content Area -->
            <div class="p-12 animate-fade-up">
                {{ $slot }}
            </div>
        </main>
    </div>

    <!-- Background Decorative Elements -->
    <div class="fixed top-0 left-0 -z-50 w-full h-full opacity-30 pointer-events-none overflow-hidden">
        <div class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] bg-indigo-200/50 rounded-full blur-[120px]"></div>
        <div class="absolute top-[60%] left-[70%] w-[35%] h-[35%] bg-blue-100/50 rounded-full blur-[100px]"></div>
    </div>

    @livewireScripts
</body>
</html>
