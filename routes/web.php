<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/admin');
});

// القديمة Livewire تم إيقاف المسارات اليدوية لصالح قالب فيلامينت الاحترافي
// Route::get('/login', ...);
// Route::middleware(['auth'])->prefix('admin')->group(...);
