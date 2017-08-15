<?php

Route::get('/', function()
{
	return Redirect::to('/home');
});
Route::get('/home/{variable?}','HomeController@showLinks');
Route::get('/form/{var?}','HomeController@showActions');
Route::controller('formAct','HomeController');

