<?php

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
Route::get('/','FrontController@index');
Route::get('/products','FrontController@products');
Route::get('/about','FrontController@about');
Route::get('/checkout','FrontController@checkout');
Route::get('/contact','FrontController@contact');
Route::get('/cart','FrontController@cart');