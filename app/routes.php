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


/*** Base routes ***/
Route::get('event/register', 'EventController@getEventPage');
Route::post('event/register', 'EventController@postEvent');
Route::resource('events', 'EventController');


/*** login -- authentication routes ***/
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController');


Route::get('profile/{username}', 'SessionsController@profile')->before('auth');
Route::get('profile', function() {
  return Redirect::to('profile/'. Auth::user()->username);
});


/*** Register routes ***/
Route::get('register', 'SessionsController@getRegister');
Route::post('register', 'SessionsController@postRegister');


/*** Static routes ***/
Route::get('/', ['as' => 'home', function()
{
	return View::make('static.home');
}]);


Route::get('agenda', function() {
  return View::make('static.agenda');
});


Route::get('keynote', function() {
  return View::make('static.keynote');
});

Route::get('whyattend', function() {
  return View::make('static.whyattend');
});

Route::get('locations', function() {
  return View::make('static.locations');
});


Route::get('contact', function() {
  return View::make('static.contact');
});


