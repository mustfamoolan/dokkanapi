<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Dokkan Admin' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-[#f8f9fc] font-sans antialiased text-slate-800">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        @include('layouts.partials.sidebar')

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto relative focus:outline-none">
            <!-- Header -->
            @include('layouts.partials.header')

            <!-- Content Area -->
            <div class="py-12 px-8">
                {{ $slot }}
            </div>
        </main>
    </div>

    @livewireScripts
</body>
</html>
