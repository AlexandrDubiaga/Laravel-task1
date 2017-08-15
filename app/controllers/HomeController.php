<?php

class HomeController extends BaseController {
	public function showLinks($variable=null)
	{
		return View::make('home.index',array('variable'=>$variable));
	}
	public function showForm()
	{
			return View::make('home.form');
	}
	public function showArticles()
	{
			return View::make('home.articles');
	}

}
