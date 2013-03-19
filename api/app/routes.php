<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as'=>'home', 'uses'=>'UsersController@getLogin'));
Route::get('/user/login', array('as'=>'login', 'uses'=>'UsersController@getLogin'));
Route::get('/user/logout', array('as'=>'logout', 'uses'=>'UsersController@getLogout'));

Route::post('/user/login', array('before'=>'csrf', 'uses'=>'UsersController@postLogin'));

Route::resource('users', 'UsersController');

Route::resource('carts', 'CartsController');

Route::resource('accounts', 'AccountsController');

Route::resource('items', 'ItemsController');

Route::resource('vendors', 'VendorsController');

Route::resource('item_vendors', 'Item_vendorsController');

Route::resource('cart_items', 'Cart_itemsController');