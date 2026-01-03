<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\UserCategoryController;
use App\Http\Controllers\UserProductController;
use App\Http\Controllers\UserSupplierController;
use App\Http\Controllers\TailwindDashboardController;
/*
|--------------------------------------------------------------------------
| Landing Page
|--------------------------------------------------------------------------
| Saat aplikasi dibuka pertama kali, user diarahkan ke halaman login
*/
Route::get('/', function () {
    if (auth()->check()) {
        return auth()->user()->role === 'admin'
            ? redirect()->route('admin.dashboard')
            : redirect()->route('user.dashboard');
    }

    return redirect()->route('login');
});

/*
|--------------------------------------------------------------------------
| Auth Routes (Login, Register, Logout)
|--------------------------------------------------------------------------
| Route bawaan Laravel Breeze
*/
require __DIR__ . '/auth.php';

/*
|--------------------------------------------------------------------------
| Admin Routes (Full CRUD)
|--------------------------------------------------------------------------
| Hanya dapat diakses oleh Admin
*/
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {

        // Dashboard Tailwind
         Route::get('/dashboard', [TailwindDashboardController::class, 'index'])
            ->name('admin.dashboard');
        
    // CRUD Data Master
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('suppliers', SupplierController::class);
});

/*
|--------------------------------------------------------------------------
| User Routes (Read Only)
|--------------------------------------------------------------------------
| User hanya memiliki akses baca
*/
Route::middleware(['auth', 'role:user'])->prefix('user')->group(function () {

   Route::get('/dashboard', [UserDashboardController::class, 'index'])
        ->name('user.dashboard');

    Route::get('/categories', [UserCategoryController::class, 'index'])
        ->name('user.categories');

    Route::get('/products', [UserProductController::class, 'index'])
        ->name('user.products');

    Route::get('/suppliers', [UserSupplierController::class, 'index'])
        ->name('user.suppliers');
});
