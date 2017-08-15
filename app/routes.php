<?php

Route::get('/', function()
{
	return Redirect::to('/home');
});
Route::get('/home/{variable?}','HomeController@showLinks');
Route::get('/actions/{var?}','HomeController@showActions');
Route::controller('articles','HomeController');

