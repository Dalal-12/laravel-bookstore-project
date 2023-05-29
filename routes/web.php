<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/',[BookController::class,'bookType'] );

Route::get('/book',[BookController::class,'bookType'] );

Route::get('/details/{id}',[BookController::class,'bookDetails'] );


Route::get('/cart/checkout/{id}',[BookController::class,'checkout'])->name('checkout');

Route::get('details/cart/{id}',[BookController::class,'checkout'])->name('checkout');


Route::post('/invoice',[BookController::class,'invoice'])->name('invoice');



Route::get('/cart/{id}',[BookController::class,'addToCart'])->name('cart');

















 



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
