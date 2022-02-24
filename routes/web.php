<?php

use Illuminate\Support\Facades\Route;

Route::get('/','PzagesController@index')->name('view');
// Route::get('/', function () {
//     return view('pages.index');
// });
Route::get('{id}/show','PagesController@show')->name('show');
Route::get('movie/player/{id}','PagesController@player')->name('player');


//Route::resource('pages', 'PagesController');

// Route::get('{zip}/{street}', 'BannersController@show');
// Route::post('{zip}/{street}/photos',[
//     'as' => 'store_photo_path',
//     'uses' => 'BannersController@addPhotos']);

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::patch('user', 'HomeController@update')->name('updateUser');

