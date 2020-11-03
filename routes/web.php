<?php

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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', 'ProductController@index');
Route::get('cart', 'ProductController@cart');
Route::get('add-to-cart/{id}', 'ProductController@addCart');

Route::patch('update-cart', 'ProductController@update');
Route::delete('remove-from-cart', 'ProductController@remove');
