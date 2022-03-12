<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;

// ADMIN CONTROLLER
use App\Http\Controllers\ProductCategoryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/', IndexController::class);

Route::get('/delivery/dashboard', [HomeController::class, 'delivery_dashboard'])->name('delivery.dashboard');

Route::get('/admin/dashboard', [HomeController::class, 'admin_index'])->name('admin.dashboard')->middleware('is_admin');

Route::resource('/admin/product-category', ProductCategoryController::class);