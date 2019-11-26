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
Route::get('/guest/d', 'GuestsController@data')->name('guest.data');
Route::get('/guest/{id}/p', 'GuestsController@picture')->name('guest.picture');
Route::get('/guest/{id}/delete}', 'GuestsController@destroy')->name('guest.delete');
Route::post('/guest/add', 'GuestsController@add')->name('guest.add');

Route::get('/paparazzi', 'PaparazziController@index')->name('paparazzi.index');
Route::get('/paparazzi/flux', 'PaparazziController@flux')->name('paparazzi.flux');
Route::get('/paparazzi/d', 'PaparazziController@data')->name('paparazzi.data');
Route::get('/paparazzi/{id}/p/{res?}', 'PaparazziController@picture')->name('paparazzi.picture');
Route::get('/paparazzi/{id}/delete', 'PaparazziController@destroy')->name('paparazzi.delete');
Route::post('/paparazzi/add', 'PaparazziController@add')->name('paparazzi.add');

Route::get('/quizz/d', 'QuizzController@data')->name('quizz.data');
Route::get('/quizz/enable', 'QuizzController@enable')->name('quizz.enable');
Route::get('/quizz/desable', 'QuizzController@desable')->name('quizz.desable');

Route::get('/photo/album/d', 'PhotosController@albumdata')->name('photo.album.data');
Route::get('/photo/album/{id}/p', 'PhotosController@cover')->name('photo.album.cover');
Route::get('/photo/album/{id}/zip', 'PhotosController@zip')->name('photo.album.zip');
