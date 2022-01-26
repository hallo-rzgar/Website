<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


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
Route::get('/login',  [ClientController::class, 'login'] );
Route::get('/signup',  [ClientController::class, 'signup'] );

Route::get('/admin',  [AdminController::class, 'dashboard'] );
Route::get('/orders',  [AdminController::class, 'orders'] );


Route::get('/addcategory',  [CategoryController::class, 'addcategory'] );
Route::post('/savecategory',  [CategoryController::class, 'savecategory'] );
Route::get('/categories',  [CategoryController::class, 'categories'] );
Route::get('/edit_category/{id}',  [CategoryController::class, 'edit'] );
Route::post('updatecategory',  [CategoryController::class, 'updatecategory'] );
Route::get('delete/{id}',  [CategoryController::class, 'deletecategory'] );


Route::get('/addproduct',  [ProductController::class, 'addproduct'] );
Route::get('/products',  [ProductController::class, 'products'] );
Route::post('/saveproducts',  [ProductController::class, 'saveproducts'] );
Route::get('/edit_product/{id}',  [ProductController::class, 'editproduct'] );



Route::get('/sliders',  [SliderController::class, 'sliders'] );
Route::get('/addslide',  [SliderController::class, 'addslide'] );



