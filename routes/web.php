<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Resource CRUD
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('addresses', AddressController::class);
Route::resource('orders', OrderController::class);
Route::resource('order-items', OrderItemController::class);
