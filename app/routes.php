<?php

Route::get('/', function()
{
	return Redirect::to('/home');
});
Route::get('/home/{variable?}','HomeController@showLinks');
Route::get('/form','HomeController@showForm');
Route::get('/articles','HomeController@showArticles');

