<?php

use App\Catalog;
use App\Car;
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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/car', function () {
    $cars = Car::get();
    return view('car', ['cars' => $cars]);
});

Route::get('/spesifikasi', function () {
    return view('spesifikasi');
});

Route::get('/price', function () {
    $catalogs = Catalog::get();
    return view('price', ['catalogs' => $catalogs]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/car/create', 'CarController@create')->name('car.create');
    Route::post('/car/store', 'CarController@store')->name('car.store');
    Route::get('/car/listcar', 'CarController@index')->name('car.listcar');
    Route::delete('/car/{cars:slug}/delete', 'CarController@destroy')->name('car.deleteuser');

    Route::get('/catalog/create', 'CatalogController@create')->name('catalog.create');
    Route::post('/catalog/store', 'CatalogController@store')->name('catalog.store');
    Route::get('/catalog/listcatalog', 'CatalogController@index')->name('catalog.listcar');
    Route::delete('/catalog/{catalogs:slug}/delete', 'CatalogController@destroy')->name('catalog.deleteuser');
});
