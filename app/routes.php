<?php

Route::get('/', function()
{
	return Redirect::to('/home');
});
Route::get('/home/{name?}','HomeController@showLinks');

