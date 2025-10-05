<?php

use App\Enum\UserRole;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Authentication
Route::controller(AuthController::class)->middleware('guest')->group(function () {

    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'loginProcess')->name('loginProcess');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'registerProcess')->name('registerProcess');

});
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// Guest Route
Route::get('/', function () {
    return view('welcome');
});

// Dashboard Redirect
Route::get('/dashboard', function () {
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

