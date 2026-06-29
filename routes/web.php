<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;

// ── Public routes ─────────────────────────────────────────────
Route::get('/',         [HomeController::class, 'index'])->name('home');
Route::get('/about',    [HomeController::class, 'about'])->name('about');
Route::get('/franchise',[HomeController::class, 'franchise'])->name('franchise');
Route::get('/career',   [HomeController::class, 'career'])->name('career');
Route::get('/support',  [HomeController::class, 'support'])->name('support');
Route::get('/contact',  [HomeController::class, 'contact'])->name('contact');

// Order
Route::get('/order',  [HomeController::class, 'orderForm'])->name('order');
Route::post('/order', [HomeController::class, 'order'])->name('order.submit');

// Contact enquiry (saved internally as an order/enquiry)
Route::post('/contact', [HomeController::class, 'contactSubmit'])->name('contact.submit');

// Product catalog
Route::get('/products',         [HomeController::class, 'products'])->name('products');
Route::get('/download-catalog', [HomeController::class, 'downloadCatalog'])->name('catalog.download');

// ── Admin routes ──────────────────────────────────────────────
Route::prefix('admin')->name('admin.')->group(function () {

    // Login (unauthenticated)
    Route::get('/login',  [AdminController::class, 'loginForm'])->name('login');
    Route::post('/login', [AdminController::class, 'login'])->name('login.post');

    // Protected
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard',                     [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/logout',                        [AdminController::class, 'logout'])->name('logout');

        // Product catalog
        Route::get('/catalog',                       [AdminController::class, 'catalogForm'])->name('catalog');
        Route::post('/catalog/upload',               [AdminController::class, 'uploadCatalog'])->name('catalog.upload');
        Route::delete('/catalog/{catalog}',          [AdminController::class, 'deleteCatalog'])->name('catalog.delete');
        Route::post('/catalog/{catalog}/activate',   [AdminController::class, 'activateCatalog'])->name('catalog.activate');
    });
});
