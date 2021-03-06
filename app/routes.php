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
Route::get('/Thank/{name?}','HomeController@getViewThank');
Route::get('/oneArticle/{link}','HomeController@getLink');
Route::get('/about','HomeController@getAbout');


