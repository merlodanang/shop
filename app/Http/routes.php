<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'as' => 'home', 'uses' => 'HomeController@index'
]);
Route::get('home/data', [
    'as' => 'home.data', 'uses' => 'HomeController@data'
]);
//CMS
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister')->name('auth.register');

Route::get('/', [
    'middleware' => 'auth',
    'uses' => 'AdminController@index'
]);
Route::get('order', [
    'uses' => 'OrderController@index',
    'as' => 'order.index'
]);

Route::resource('category','CategoryController', ['except' => ['show']]);
 Route::resource('sub-category','SubCategoryController', ['except' => ['show']]);
  Route::resource('product','ProductController', ['except' => ['show']]);

});
Route::get('categories/{id}', [
    'uses' => 'Home\CategoryController@show',
    'as' => 'home.category.show'
]);
Route::get('products/{id}', [
    'uses' => 'Home\ProductController@show',
    'as' => 'home.product.show'
]);
Route::get('detail/{id}', [
    'uses' => 'Home\DetailController@show',
    'as' => 'home.detail.show'
]);

Route::post('buy', [
    'uses' => 'Home\CheckoutController@storeSession',
    'as' => 'home.checkout.storeSession'
]);

Route::get('checkout', [
    'uses' => 'Home\CheckoutController@index',
    'as' => 'home.checkout.index'
]);

Route::get('checkout/delete/{id}', [
    'uses' => 'Home\CheckoutController@deleteCart',
    'as' => 'home.checkout.deleteCart'
]);

Route::get('order', [
    'uses' => 'Home\OrderController@order',
    'as' => 'home.order.index'
]);

Route::post('order', [
    'uses' => 'Home\OrderController@store',
    'as' => 'home.order.store'
]);