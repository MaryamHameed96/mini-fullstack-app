<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('landing');
});

Route::get('/admin/dashboard', function () {
    if (Auth::check() && Auth::user()->role === 'admin') {
        return view('dashboards.admin');
    }
    return redirect('/login');
})->name('admin.dashboard');

// User Dashboard
Route::get('/user/dashboard', function () {
    if (Auth::check() && Auth::user()->role === 'user') {
        return view('dashboards.user');
    }
    return redirect('/login');
})->name('user.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
