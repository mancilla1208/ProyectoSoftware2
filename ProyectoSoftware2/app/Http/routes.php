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
Route::bind('product', function($direccion){
	return App\Product::where('direccion', $direccion)->first();
});
Route::get('/', [
  'as'=>'home',
  'uses'=>'StoreController@index'
]);
Route::get('product/{direccion}',[
  'as'=>'product-detail',
'uses'=>'StoreController@show'
]);
// Carrito -------------

Route::get('carrito/show', [
	'as' => 'carrito-show',
	'uses' => 'CartController@show'
]);

Route::get('carrito/add/{product}', [
	'as' => 'carrito-add',
	'uses' => 'CartController@add'
]);
Route::get('carrito/delete/{product}',[
	'as' => 'carrito-delete',
	'uses' => 'CartController@delete'
]);
Route::get('carrito/trash', [
	'as' => 'carrito-trash',
	'uses' => 'CartController@trash'
]);

Route::get('cart/update/{product}/{quantity?}', [
	'as' => 'carrito-update',
	'uses' => 'CartController@update'

]);
Route::get('order-detail', [
	'middleware' => 'auth',
	'as' => 'order-detail',
	'uses' => 'CartController@orderDetail'
]);

// Authentication routes...
Route::get('auth/login', [
	'as' => 'login-get',
	'uses' => 'Auth\AuthController@getLogin'
]);

Route::post('auth/login', [
	'as' => 'login-post',
	'uses' => 'Auth\AuthController@postLogin'
]);

Route::get('auth/logout', [
	'as' => 'logout',
	'uses' => 'Auth\AuthController@getLogout'
]);

// Registration routes...
Route::get('auth/register', [
	'as' => 'register-get',
	'uses' => 'Auth\AuthController@getRegister'
]);

Route::post('auth/register', [
	'as' => 'register-post',
	'uses' => 'Auth\AuthController@postRegister'
]);
// Registration routes...
Route::get('auth/register', [
	'as' => 'register-get',
	'uses' => 'Auth\AuthController@getRegister'
]);

Route::post('auth/register', [
	'as' => 'register-post',
	'uses' => 'Auth\AuthController@postRegister'
]);
