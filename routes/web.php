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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::post('/follow/{user}', 'FollowController@store');

Route::get('/', 'PostsController@index');
Route::post('/post', 'PostsController@store');
Route::get('/post/create', 'PostsController@create');
Route::get('/post/{image_hash}', 'PostsController@show'); 


Route::get('/profile/{username}', 'ProfilesController@index')->name('profile.index');
Route::get('/profile/edit/{username}', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/update/{user}', 'ProfilesController@update')->name('profile.update');
