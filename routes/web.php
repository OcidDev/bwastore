<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard/product', [DashboardController::class, 'product'])->name('dashboard-product');
Route::get('/dashboard/product/{id}', [DashboardController::class, 'product_detail'])->name('dashboard-product-detail');

Route::get('/dashboard/transaction', [DashboardController::class, 'transaction'])->name('dashboard-transaction');
Route::get('/dashboard/transaction/{id}', [DashboardController::class, 'transaction_detail'])->name('dashboard-transaction-detail');

Route::get('/dashboard/setting', [DashboardController::class, 'setting'])->name('dashboard-setting');
Route::get('/dashboard/account', [DashboardController::class, 'account'])->name('dashboard-account');


// ->middleware(['auth','admin'])
Route::prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin-dashboard');
});

Auth::routes();
