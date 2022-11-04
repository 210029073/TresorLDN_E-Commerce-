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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('main');
});

Route::get('about', function() {
    return view('about');
});

Route::get('contacts', function () {
    return view('contact');
});

Route::get('home', function () {
    return view('home');
});


Route::get('product', function () {
    return view('product');
});


Route::get('basket', function() {
    return view('baskets');
});

Route::get('products', 'App\Http\Controllers\ProductsController@showAll')->name('products');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
