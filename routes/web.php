<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Product Detail
Route::get('/products/{id}', [HomeController::class, 'productDetail'])->name('products.detail');

// About Page
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Contact Page
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
