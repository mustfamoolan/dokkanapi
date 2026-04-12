<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Dokkan Admin' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-[#fafafa] font-sans antialiased">
    <div class="min-h-screen flex flex-col items-center justify-center p-6">
        {{ $slot }}
    </div>
    @livewireScripts
</body>
</html>
