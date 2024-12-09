<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Middleware\RoleMiddleware;

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

Route::get('/login', [PageController::class,'login'])->name('login');

Route::get('/register', [PageController::class,'register'])->name('register');

Route::middleware([RoleMiddleware::class . ':admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware([RoleMiddleware::class . ':store_owner'])->group(function () {
    Route::get('/store/dashboard', [StoreController::class, 'index'])->name('store.dashboard');
});

Route::middleware([RoleMiddleware::class . ':customer'])->group(function () {
    Route::get('/customer/dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');
});
