<?php

class HomeController extends BaseController {
	public function showLinks($variable=null)
	{
		return View::make('home.index',array('variable'=>$variable));
	}
	public function showForm($var = 'user')
	{
			return View::make('home.form',array('name'=>$user));
	}
	public function showArticles()
	{
			return View::make('home.articles');
	}

}
