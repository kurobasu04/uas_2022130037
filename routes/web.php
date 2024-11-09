<?php

// routes/web.php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthAdmin;
use App\Http\Middleware\AuthUser;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', AuthAdmin::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    // Add more admin-specific routes here
});

Route::middleware(['auth', AuthUser::class])->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    // Add more user-specific routes here
});

// Resource CRUD
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('addresses', AddressController::class);
Route::resource('orders', OrderController::class);
Route::resource('order-items', OrderItemController::class);
