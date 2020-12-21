<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShopController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ShopMonitoringController;

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
Route::get('/dev', function(){
    return view('dev-report');
});

Route::get('/brands/create', function () {
    return view('/brands/create');
});
Route::get('/brands', function () {
    return view('/brands/index');
});

Route::get('/prices', function () {
    return view('/prices/index');
});
Route::get('/prices/create', function () {
    return view('/prices/create');
});

Route::get('/products', function () {
    return view('/products/index');
});
Route::get('/products/create', function () {
    return view('/products/create');
});

Route::get('/manufacturers', function () {
    return view('/manufacturers/index');
});
Route::get('/manufacturers/create', function () {
    return view('/manufacturers/create');
});

Route::get('/shops', function () {
    return view('/shops/index');
});
Route::get('/shops/create', function () {
    return view('/shops/create');
});

Route::get('/shopmonitorings', function () {
    return view('/shopmonitorings/index');
});
Route::get('/shopmonitorings/create', function () {
    return view('/shopmonitorings/create');
});

Route::resource('shops', ShopController::class);
Route::resource('manufacturers', ManufacturerController::class);
Route::resource('brands', BrandController::class);

Route::resource('products', ProductController::class);
Route::get('/products-data', [ProductController::class, 'data']);

Route::resource('prices', PriceController::class);
Route::get('/brands-data', [PriceController::class, 'data']);

Route::resource('shopmonitorings', ShopMonitoringController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');