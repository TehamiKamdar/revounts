<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\PagesController;

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
Route::get('/about', [PagesController::class , 'about'])->name('about');
Route::get('/terms', [PagesController::class , 'terms'])->name('terms');