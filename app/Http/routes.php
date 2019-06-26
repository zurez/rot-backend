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
Route::resource('event','EventController');

Route::resource('volunteer','VolunteerController');

Route::get('/gallery','ApiController@gallery');

Route::get('gallery/{id}','ApiController@galleryimage');

Route::get('messages/{user_id?}','ApiController@messages');

Route::get('messages/{id}','ApiController@message');

Route::get('events','ApiController@events');

Route::get('events/{id}','ApiController@event');

Route::get('bearers','ApiController@bearers');

Route::get('profile/{number}','ApiController@profile');

Route::get('newsletter','ApiController@newsletter');

Route::post('login','UserController@login');

Route::get('volunteer/single/{user_id}','VolunteerController@single');

Route::get('timeline','ApiController@timeline');

// Views

Route::get('add/{name}',function($view){
	return view($view);
});

// POST

Route::post('bearer','AddController@bearer');
Route::post('message','MessageController@message');