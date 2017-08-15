<?php

Route::get('/', function()
{
	return Redirect::to('/home');
});
Route::get('/home/{variable?}','HomeController@showLinks');
Route::controller('articles','HelloController');

