<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\MenController;
use App\Http\Controllers\WomenController;
use App\Http\Controllers\CartController;

// Main Routes
Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/welcome', [PagesController::class, 'welcome'])->name('welcome');
Route::get('/registration', [PagesController::class, 'registration'])->name('registration');
Route::get('/admin', [PagesController::class, 'admin'])->name('admin');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::get('/men', [MenController::class, 'index'])->name('men');
Route::get('/women', [WomenController::class, 'index'])->name('women');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/checkout', [PagesController::class, 'checkout'])->name('checkout');
Route::resource('posts', PostsController::class);

// Cart Routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart/remove/{productName}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update/{productName}', [CartController::class, 'update'])->name('cart.update');
