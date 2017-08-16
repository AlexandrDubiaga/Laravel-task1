<?php

Route::get('/', function()
{
	return Redirect::to('/home');
});
Route::get('/home/{variable?}','HomeController@showLinks');
Route::get('/form/home/{variable?}','HomeController@showLinks');
Route::get('/form/{name?}','HomeController@getForm');
Route::get('/articles','HomeController@showArticles');
Route::post('/form','HomeController@postForm');

