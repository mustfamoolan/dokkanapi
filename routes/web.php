<?php

use App\Livewire\Auth\Login;
use App\Livewire\Admin\EmployeeManager;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

// Auth Routes
Route::get('/login', Login::class)->name('login')->middleware('guest');

// Logout Route
Route::post('/logout', function() {
    auth()->logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect('/login');
})->name('logout');

// Admin Protected Routes
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function() {
        return view('admin.dashboard'); // TODO: Build dashboard component
    })->name('admin.dashboard');

    Route::get('/employees', EmployeeManager::class)->name('admin.employees');
});
