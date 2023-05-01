<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categories', [HomeController::class, 'category'])->name('categories');
Route::get('/details/{id}', [HomeController::class, 'details'])->name('details');
Route::get('/cart/{id}', [HomeController::class, 'cart'])->name('cart');
Route::get('/success/', [HomeController::class, 'success'])->name('success');

Route::get('/register/success/', [RegisterController::class, 'success'])->name('register-success');

Auth::routes();
