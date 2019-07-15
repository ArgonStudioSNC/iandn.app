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

// route to redirect to the stores
Route::get('/', function () {
    return view('gettheapp');
});

Auth::routes(['register' => false]);

Route::get('/admin', 'AdminController@dashboard')->name('dashboard');

Route::get('/guest', 'GuestsController@list')->name('guest');
Route::get('/guest/random', 'GuestsController@random')->name('guest.random');
Route::get('/guest/{id}/p', 'GuestsController@picture')->name('guest.picture');
Route::get('/guest/{id}/delete}', 'GuestsController@destroy')->name('guest.delete');
Route::post('/guest/add', 'GuestsController@add')->name('guest.add');

Route::get('/instagram', 'InstagramController@index')->name('instagram.index');
Route::get('/instagram/flux', 'InstagramController@flux')->name('instagram.flux');
Route::get('/instagram/d', 'InstagramController@data')->name('instagram.data');
Route::get('/instagram/{id}/p/{res?}', 'InstagramController@picture')->name('instagram.picture');
Route::get('/instagram/{id}/delete', 'InstagramController@destroy')->name('instagram.delete');
Route::post('/instagram/add', 'InstagramController@add')->name('instagram.add');
