<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use  App\Http\Controllers\User_CartController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/category', [HomeController::class, 'category'])->name('category-select-list');

Route::get('/product-details', [HomeController::class, 'productdetails'])->name('product-details');

Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('/register', [HomeController::class, 'register'])->name('register');

Route::get('/cart', [User_CartController::class, 'cart'])->name('cart');

Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');

Route::resource('a', UserController::class);;

