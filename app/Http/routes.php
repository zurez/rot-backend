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

Route::resource('/','UserController');


Route::get('/gallery','ApiController@gallery');

Route::get('gallery/{id}','ApiController@galleryimage');

Route::get('messages','ApiController@messages');

Route::get('messages/{id}','ApiController@message');

Route::get('events','ApiController@events');

Route::get('events/{id}','ApiController@event');

Route::get('bearers','ApiController@bearers');

Route::get('profile/{number}','ApiController@profile');
