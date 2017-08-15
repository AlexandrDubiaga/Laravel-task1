<?php

Route::get('/', function()
{
	return Redirect::to('/home');
});
Route::get('/home/{variable?}','HomeController@showLinks');
Route::get('/form/home/{variable?}','HomeController@showLinks');
Route::get('/form/{name?}','HomeController@showForm');
Route::get('/articles','HomeController@showArticles');

