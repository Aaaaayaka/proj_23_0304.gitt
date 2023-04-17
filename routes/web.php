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

Route::get('/','ItemController@home')->name('ホーム');
Route::get('ranking','ItemController@ranking')->name('item.ranking');
Route::get('items/search','ItemController@search')->name('item.search');
Route::get('items/{item}','ItemController@show')->name('item.show');
Route::get('user/{user}','UserController@show')->name('user.show');
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login');
Route::get('register','Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register','Auth\RegisterController@register');
Route::post('logout','Auth\LoginController@logout')->name('logout');
Route::get('item/create','ItemController@create')->name('item.create');
Route::post('item/store','ItemController@store')->name('item.store');
Route::post('item/keep','ItemController@keep')->name('item.keep');
Route::get('materials','MaterialController@index')->name('material.index');
Route::get('item/edit/{item}','ItemController@edit')->name('item.edit');
Route::get('item/update/{item}','ItemController@update')->name('item.update');
Route::post('item/favorite/{item}','FavoriteController@favorite')->name('item.favorite');
Route::delete('item/unfavorite/{item}','FavoriteController@unfavorite')->name('item.unfavorite');
Route::post('post/{item}/store','PostController@store')->name('post.store');
Route::put('post/{item}/update','PostController@update')->name('post.update');
Route::delete('post/{item}/delete','PostController@destroy')->name('post.destroy');
Route::get('profile','UserController@profile')->name('user.profile');
Route::get('profile/edit','UserController@edit')->name('user.edit');
Route::get('profile/update','UserController@update')->name('user.update');
Route::delete('delete/account','UserController@destroy')->name('user.destroy');
Route::post('follow/{user}','FollowController@follow')->name('user.follow');
Route::delete('unfollow/{user}','FollowController@unfollow')->name('unfollow');
Route::get('notifications','NotificationController@index')->name('notifications.index');
Route::get('notification/{notification}','NotificationController@show')->name('notifications.show');
