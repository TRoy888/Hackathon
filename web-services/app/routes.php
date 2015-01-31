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

Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('/user','UserController');
Route::resource('/category','CategoryController');

Route::get('/login', 'SessionController@create');
Route::get('/logout', 'SessionController@destroy');
Route::resource('/session','SessionController');

Route::resource('/activity','ActivityController');
Route::get('/activities/friends/{userId}', 'ActivityController@getFriendsActivities');
Route::post('/join-activity', 'ActivityController@joinActivity');
Route::get('/enrolled-activitiy/user/{userId}', 'ActivityController@getEnrolledActivities');
Route::get('/created-activitiy/user/{userId}', 'ActivityController@getCreatedActivities');
