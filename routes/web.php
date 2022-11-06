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


Route::get('/product/{id}', '\App\Http\Controllers\ProductsController@showId');


Route::get('/basket', [\App\Http\Controllers\BasketCollectionController::class, 'showAll'])->name('basket');

Route::get('/products', [\App\Http\Controllers\ProductsController::class, 'index'])->name('products');
Route::post('/addItem', [\App\Http\Controllers\ProductsController::class, 'addItem']);
Route::get('/removeItem', [\App\Http\Controllers\BasketCollectionController::class, 'removeItem']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
