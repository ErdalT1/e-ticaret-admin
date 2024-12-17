<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PageController::class,'anasayfa'])->name('anasayfa');

Route::get('/all-customer', [PageController::class,'allCustomer'])->name('all-customer');

Route::get('/add-product', [PageController::class,'addProduct'])->name('add-product');

Route::get('/all-product', [PageController::class,'allProduct'])->name('all-product');

Route::get('/category', [PageController::class,'category'])->name('category');

Route::get('/order', [PageController::class,'order'])->name('order');

Route::get('/calendar', [PageController::class,'calendar'])->name('calendar');

Route::get('/register', [PageController::class,'register'])->name('register');

Route::post('/login', [LoginController::class, 'login'])->name('login');




Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::middleware(['auth', 'role:StoreOwner'])->group(function () {
    Route::get('/store/dashboard', function () {
        return view('store.dashboard');
    })->name('store.dashboard');
});

Route::middleware(['auth', 'role:Customer'])->group(function () {
    Route::get('/customer/dashboard', function () {
        return view('customer.dashboard');
    })->name('customer.dashboard');
});
