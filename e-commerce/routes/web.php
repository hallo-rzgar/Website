<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductController;

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

Route::get('/',  [ClientController::class, 'home'] );
Route::get('/shop',  [ClientController::class, 'shop'] );
Route::get('/cart',  [ClientController::class, 'cart'] );
Route::get('/checkout',  [ClientController::class, 'checkout'] );
Route::get('/login',  [ClientController::class, 'log'] );

Route::get('/admin',  [AdminController::class, 'dashboard'] );
Route::get('/addcategory',  [AdminController::class, 'addcategory'] );
Route::get('/categories',  [AdminController::class, 'categories'] );
Route::get('/orders',  [AdminController::class, 'orders'] );




Route::get('/addproduct',  [ProductController::class, 'addproduct'] );
Route::get('/products',  [ProductController::class, 'products'] );


Route::get('/sliders',  [SliderController::class, 'sliders'] );
Route::get('/addslide',  [SliderController::class, 'addslide'] );



