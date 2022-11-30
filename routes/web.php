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

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('about', function() {
    return view('about');
})->name('about');

Route::get('contacts', function () {
    return view('contact');
})->name('contact');

Route::get('review', function () {
    return view('review');
})->name('review');

Route::get('privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('home', function () {
    return view('home');
})

;


Route::get('/product/{id}', '\App\Http\Controllers\ProductsController@showId');
Route::get('/products/product/{id}', '\App\Http\Controllers\ProductsController@showId');


Route::get('/basket', [\App\Http\Controllers\BasketCollectionController::class, 'showAll'])->name('basket');

Route::get('/products', [\App\Http\Controllers\ProductsController::class, 'index'])->name('products');
Route::get('/products/tables', [\App\Http\Controllers\ProductsController::class, 'showTables'])->name('tables');
Route::get('/products/sofas', [\App\Http\Controllers\ProductsController::class, 'showSofas'])->name('sofas');
Route::get('/products/chairs', [\App\Http\Controllers\ProductsController::class, 'showChairs'])->name('chairs');
Route::get('/products/beds', [\App\Http\Controllers\ProductsController::class, 'showBeds'])->name('beds');
Route::post('/addItem', [\App\Http\Controllers\ProductsController::class, 'addItem']);
Route::post('/products/addItem', [\App\Http\Controllers\ProductsController::class, 'addItem']);

Route::get('/removeItem', [\App\Http\Controllers\BasketCollectionController::class, 'removeItem']);

Route::post('/basket/createOrder', [\App\Http\Controllers\OrderlineController::class, 'createOrder']);
Route::get('basket/removeAll', [\App\Http\Controllers\BasketCollectionController::class, 'removeAll'])->name('removeAll');

Route::get('/pastOrders', [\App\Http\Controllers\OrderlineController::class, 'viewPastOrders'])->name('pastOrders');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/admin/customers', [\App\Http\Controllers\AdminController::class, 'showAllCustomers'])->name('adminViewCustomers');
Route::get('/admin/orders', [\App\Http\Controllers\AdminController::class, 'showAllOrders'])->name('adminViewOrders');
Route::get('/admin/products', [\App\Http\Controllers\AdminController::class, 'showAdminProducts'])->name('adminViewProducts');


Route::post('/products/search', [\App\Http\Controllers\Search\SearchController::class, 'searchTarget'])->name('search');
Route::post('/products/selection', [\App\Http\Controllers\Filters\ProductsFiltersController::class, 'productFilter'])->name('productFilter');
