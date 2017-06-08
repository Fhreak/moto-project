<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['prefix' => 'admin'], function(){
  Route::get('/', 'HomeAdminController@admin');

  /*
  |--------------------------------------------------------------------------
  | Products Routes
  |--------------------------------------------------------------------------
  */
  Route::get('products', 'ProductsController@products');

  Route::get('api/products', function () {
      return App\Product::all();
  });

  Route::get('getData', 'ProductsController@getProductsData');

  Route::post('addNewProduct', 'ProductsController@addNewProduct');
});
