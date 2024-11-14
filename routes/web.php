<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthAdmin;
use App\Http\Middleware\AuthUser;

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

// Route group autentikasi
Route::middleware(['auth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Group prefix 'admin'
    Route::middleware([AuthAdmin::class])->prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');

        Route::get('/products', [ProductController::class, 'index'])->name('products.index');
        Route::get('/category', [CategoryController::class, 'index'])->name('category');
        Route::get('/orders', [OrderController::class, 'index'])->name('order.index');

        // Resource CRUD dengan prefix 'admin'
        Route::resource('categories', CategoryController::class);
        Route::resource('products', ProductController::class);
        Route::resource('addresses', AddressController::class);
        Route::resource('orders', OrderController::class);
        Route::resource('order-items', OrderItemController::class);
    });

    Route::get('/shop', [ProductController::class, 'shop'])->name('shop.index');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

    // Group untuk user biasa
    Route::middleware([AuthUser::class])->group(function () {
        Route::get('/user', [UserController::class, 'index'])->name('user.index');
    });
});
