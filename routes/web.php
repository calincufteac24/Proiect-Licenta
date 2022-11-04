<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AProductController;
use App\Http\Controllers\Admin\AUserController;
use App\Http\Controllers\Admin\AOrderController;
use App\Mail\OrderMail;
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
Route::get('/', [ProductController::class, 'index']);

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact']);
Route::post('insert-data', [App\Http\Controllers\ContactController::class, 'insert']);
Route::post('newsletters', [App\Http\Controllers\ContactController::class, 'newsletter']);
Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'category']);
Route::get('discount', [ProductController::class, 'discount']);
Route::get('view-category/{slug}', [ProductController::class, 'viewcategory']);
Route::get('send-mail', [CheckoutController::class, 'mailsend']);

Route::post('/add-to-cart', [CartController::class, 'addProduct']);
Route::delete('delete-cart-item', [CartController::class, 'deleteproduct']);
Route::post('update-cart',  [CartController::class, 'updatecart']);

Route::middleware(['auth','isAdmin'])->group(function() {
  Route::get('/dashboard',  [AdminController::class, 'index']);
  
  Route::get('/dashboard/category', [App\Http\Controllers\Admin\CategoryController::class, 'indexcate']);
  Route::get('/dashboard/add-category', [App\Http\Controllers\Admin\CategoryController::class, 'add']);
  Route::post('insert-category', [App\Http\Controllers\Admin\CategoryController::class, 'insert']);
  Route::get('editcate/{id}',  [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
  Route::get('updatecate/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
  Route::get('deletecate/{id}',  [App\Http\Controllers\Admin\CategoryController::class, 'delete']);
  
  Route::get('/dashboard/products',  [App\Http\Controllers\Admin\AProductController::class, 'index']);
  Route::get('/dashboard/add-products',  [App\Http\Controllers\Admin\AProductController::class, 'add']);
  Route::post('/dashboard/insert-product', [App\Http\Controllers\Admin\AProductController::class, 'insert']);
  Route::get('editproduct/{id}', [App\Http\Controllers\Admin\AProductController::class, 'edit']);
  Route::get('updateproduct/{id}',[App\Http\Controllers\Admin\AProductController::class, 'update']);
  Route::get('deleteproduct/{id}', [App\Http\Controllers\Admin\AProductController::class, 'delete']);

  Route::get('/dashboard/orders', [App\Http\Controllers\Admin\AOrderController::class, 'index']);
  Route::get('admin/view-orders/{id}', [App\Http\Controllers\Admin\AOrderController::class, 'view']);
  Route::get('update-order/{id}', [App\Http\Controllers\Admin\AOrderController::class, 'updateorder']);
  Route::get('/dashboard/orders-history',  [App\Http\Controllers\Admin\AOrderController::class, 'orderhistory']);

  Route::get('/dashboard/users',  [App\Http\Controllers\Admin\AUserController::class, 'users']);
  Route::get('view-users/{id}', [App\Http\Controllers\Admin\AUserController::class, 'viewusers']);
  Route::get('/dashboard/contact', [App\Http\Controllers\Admin\AUserController::class, 'contact']);
});

Route::middleware(['auth'])->group(function() {
  Route::get('cart', [CartController::class, 'viewcart']);
  Route::get('checkout', [CheckoutController::class, 'index']);
  Route::post('place-order', [CheckoutController::class, 'placeorder']);
  Route::get('my-orders',[UserController::class, 'index']);
  Route::get('view-orders/{id}', [UserController::class, 'view']);

});

