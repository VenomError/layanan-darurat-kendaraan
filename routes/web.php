<?php

use App\Enum\UserRole;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Authentication
Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginProcess'])->name('loginProcess');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerProcess'])->name('registerProcess');

});
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// Guest Route
Route::view('/', 'landing.index');
Route::view('/bengkels', 'landing.bengkels.grid');

// Dashboard Redirect
Route::redirect('/dashboards', '/dashboard-redirect');
Route::get('/dashboard-redirect', function () {
    $user = Auth::user();

    if (!$user) {
        return redirect()->route('login');
    }

    return match ($user->role) {
        UserRole::ADMIN => redirect('/dashboard/admin'),
        UserRole::BENGKEL => redirect('/dashboard/bengkel'),
        UserRole::PUBLIC => redirect('/dashboard/public'),
        default => abort(403, 'Unauthorized'),
    };
})->middleware('auth')->name('dashboard');

// Admin
Route::prefix('dashboard/admin')->middleware(['auth', 'role:ADMIN'])->group(function () {
    Route::get('/', fn() => view('dashboard.admin.index'));
});

// Public User
Route::prefix('dashboard/public')->middleware(['auth', 'role:PUBLIC'])->group(function () {
    Route::get('/', fn() => view('dashboard.user.index'));
});

// Admin Bengkel
Route::prefix('dashboard/bengkel')->middleware(['auth', 'role:BENGKEL'])->group(function () {
    Route::get('/', fn() => view('dashboard.bengkel.index'));
});

