<?php

use App\Http\Controllers\Backend\AdminController;
use Illuminate\Support\Facades\Route;

// Admin routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->as('admin.')->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});
