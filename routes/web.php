<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/admin', AdminController::class)->name('home');

Route::resource('categories', CategoryController::class);
Route::resource('items', ItemController::class);
Route::resource('orders', OrderController::class);
Route::resource('products', ProductController::class);
Route::resource('users', UserController::class);*/

Route::get('/{dummy}', IndexController::class)->where('dummy', '.*');
