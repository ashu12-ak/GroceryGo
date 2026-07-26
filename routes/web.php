<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('home');
});

// About & Contact
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

// Category Routes
Route::resource('categories', CategoryController::class);

// Product Routes
Route::resource('products', ProductController::class);

// Cart Routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/{id}', [CartController::class, 'store'])->name('cart.store');
Route::delete('/cart/{cart}', [CartController::class, 'destroy'])->name('cart.destroy');

// Checkout Routes
Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('place.order');

// Admin Orders
Route::get('/orders', [AdminOrderController::class, 'index'])->name('orders.index');
Route::patch('/orders/{order}', [AdminOrderController::class, 'update'])->name('orders.update');

Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // User Order History
    Route::get('/my-orders', [OrderController::class, 'index'])->name('my.orders');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';