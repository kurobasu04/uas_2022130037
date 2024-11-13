<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthAdmin;
use App\Http\Middleware\AuthUser;

// Rute utama yang menampilkan halaman home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute autentikasi
Auth::routes();

// Rute yang membutuhkan autentikasi
Route::middleware(['auth'])->group(function () {

    // Rute untuk halaman home setelah login
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Rute untuk admin dengan middleware AuthAdmin
    Route::middleware([AuthAdmin::class])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    });

    // Rute untuk user dengan middleware AuthUser
    Route::middleware([AuthUser::class])->group(function () {
        Route::get('/user', [UserController::class, 'index'])->name('user.index');
    });

    // Rute lain yang membutuhkan autentikasi
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/order', [OrderController::class, 'index'])->name('order');

    // Resource CRUD
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('addresses', AddressController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('order-items', OrderItemController::class);
});
