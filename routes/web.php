<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SeasonalController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class , 'index'])->name('home');


Route::get('/reviews', [ReviewsController::class , 'index'])->name('reviews');
Route::get('/review/{id}', [ReviewsController::class , 'details'])->name('review.details');


Route::get('/coupons', [CouponsController::class , 'index'])->name('coupons');
Route::get('/coupon/{id}', [CouponsController::class , 'details'])->name('coupon.details');


Route::get('/blogs', [BlogsController::class , 'index'])->name('blogs');
Route::get('/blog/{id}', [BlogsController::class , 'details'])->name('blog.details');

Route::get('/seasonal', [SeasonalController::class , 'index'])->name('seasonals');


Route::get('/about', [PagesController::class , 'about'])->name('about');
Route::get('/terms', [PagesController::class , 'terms'])->name('terms');
Route::get('/privacy', [PagesController::class , 'privacy'])->name('privacy');
Route::get('/contact', [PagesController::class , 'contact'])->name('contact');
Route::get('/categories', [PagesController::class , 'categories'])->name('categories');
Route::get('/stores', [PagesController::class , 'stores'])->name('stores');

Route::group(['prefix' => 'revounts_cms', 'as' => 'revounts_cms.'], function () {
    Route::get('/', [DashboardController::class,'index'])->name('index');
    Route::get('/stores', [StoreController::class,'index'])->name('store-index');
    Route::get('/create-store',[StoreController::class,'create'])->name('create-store');
    Route::post('/stores-store',[StoreController::class,'store'])->name('stores.store');
    Route::get('/store-delete/{id}',[StoreController::class,'destroy'])->name('store-destroy');
    Route::get('/store-edit',[StoreController::class,'editForm'])->name('store-edit-form');
    Route::get('/store/{id}/edit',[StoreController::class,'edit'])->name('store-edit');
    Route::post('/store/update',[StoreController::class,'update'])->name('store-update');


    // Reviews
    Route::get('/reviews',[ReviewsController::class,'fetch'])->name('review-index');
    Route::get('/create-review',[ReviewsController::class,'create'])->name('create-review');
    Route::post('/review-store',[ReviewsController::class,'store'])->name('store-review');
    Route::delete('/reviews/{id}', [ReviewsController::class, 'destroy'])->name('reviews.destroy');
    Route::get('/review-edit/{id}',[ReviewsController::class,'edit'])->name('review-edit');
    Route::post('/review/update', [ReviewsController::class, 'update'])->name('update-review');


    // Blogs
    Route::get('/blogs',[BlogsController::class,'fetch'])->name('blog-index');
    Route::get('create/blogs', [BlogsController::class, 'create'])->name('create-blog');
    Route::post('/blogs', [BlogsController::class, 'store'])->name('store-blog');
    Route::post('/blogs/{id}', [BlogsController::class, 'destroy'])->name('blogs.destroy');
    Route::get('/blog-edit/{id}',[BlogsController::class,'edit'])->name('blog-edit');
    Route::post('/blog/update', [BlogsController::class, 'update'])->name('update-blog');


    // Coupons
    Route::get('/coupons', [CouponsController::class , 'fetch'])->name('coupon-index');
    Route::get('/create/coupons', [CouponsController::class, 'create'])->name('create-coupon');
    Route::post('/coupons', [CouponsController::class, 'store'])->name('store-coupon');
    Route::get('/coupons/by-store/{store}', [CouponsController::class, 'byStore'])->name('coupons.byStore');
    Route::post('/coupons/{id}', [CouponsController::class, 'destroy'])->name('coupons.destroy');
    Route::get('/coupons/edit/{id}',[CouponsController::class,'edit'])->name('coupons-edit');
    Route::post('/coupon/update',[CouponsController::class,'update'])->name('update-coupon');


    // Users
    Route::get('/users', [UserController::class , 'index'])->name('user-index');
    Route::post('/user/status', [UserController::class, 'status']) ->name('users.status.change');
    Route::get('/create/users', [UserController::class, 'create'])->name('create-users');
    Route::post('/users', [UserController::class, 'store'])->name('store-users');
    Route::post('/user/{id}', [UserController::class, 'destroy']) ->name('users.destroy');
    Route::get('/users/{id}/edit', [UserController::class, 'edit']);
    Route::post('/users/update', [UserController::class, 'update'])->name('update-user');


    // Category
    Route::get('/category', [CategoryController::class , 'index'])->name('category-index');
    Route::get('/create/category', [CategoryController::class , 'create'])->name('create-categories');
    Route::post('/category', [CategoryController::class , 'store'])->name('store-category');
    Route::post('/category/update', [CategoryController::class, 'update']);
    Route::get('/category/{id}', [CategoryController::class, 'show']);

});