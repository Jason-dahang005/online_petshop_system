<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductViewController;
use App\Http\Controllers\CartController;

// ADMIN CONTROLLER
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\PetCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoldfishController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReservationController;


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


Route::get('/product-view/{id}', [IndexController::class, 'show'])->name('product-view.show');
Route::get('/cart', [CartController::class, 'index']);
Route::post('/product-view', [CartController::class, 'store'])->name('cart.store');
Route::post('/cart', [CartController::class, 'delete'])->name('cart.delete');
Route::resource('/', IndexController::class);

Route::get('/delivery/dashboard', [HomeController::class, 'delivery_dashboard'])->name('delivery.dashboard');

Route::middleware(['is_admin'])->group(function () {
  Route::get('/admin/dashboard', [HomeController::class, 'admin_index'])->name('admin.dashboard');
  Route::resource('/admin/product-category', ProductCategoryController::class);
  Route::resource('/admin/pet-category', PetCategoryController::class);
  Route::resource('/admin/products', ProductController::class);
  Route::resource('/admin/users', UserController::class);
  Route::resource('/admin/goldfish', GoldfishController::class);
  Route::resource('/admin/order', OrderController::class);
  Route::resource('/admin/reservation', ReservationController::class);

});


