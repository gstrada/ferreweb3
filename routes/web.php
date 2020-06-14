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

Route::get('/', function () {
    return view('welcome');
})->name('/');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/stock/items', 'ItemController@index')->name('stock.items');
Route::get('/stock/add-items', 'ItemController@addItems')->name('stock.add-items');
Route::post('/stock/items/store', 'ItemController@store')->name('stock.items.store');
Route::get('/stock/rubros', 'CategoriesController@index')->name('stock.categories');
Route::get('/stock/marcas', 'BrandsController@index')->name('stock.brands');
Route::post('/stock/rubros', 'CategoriesController@store')->name('stock.categories.store');
Route::post('/stock/marcas', 'BrandsController@store')->name('stock.brands.store');
Route::get('/stock/marcas/edit/{param}', 'BrandsController@edit')->name('stock.brands.edit');
Route::post('/stock/rubros/delete', 'CategoriesController@destroy')->name('stock.categories.destroy');
Route::get('/stock/rubros/edit/{param}', 'CategoriesController@edit')->name('stock.categories.edit');
Route::post('/stock/rubros/update', 'CategoriesController@update')->name('stock.categories.update');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
//Proveedores
Route::get('/proveedores', 'SupplierController@index')->name('suppliers');
Route::post('/proveedores', 'SupplierController@store')->name('suppliers.store');
Route::get('/proveedores/vendedores', 'SellerController@index')->name('suppliers.salesmen');
Route::post('/proveedores/vendedores', 'SellerController@store')->name('suppliers.salesmen.store');

//Provincias
Route::post('proveedores/ciudades', 'CitiesController@getCitiesByProvinceId')->name('province.cities');
