<?php

class HomeController extends BaseController {
	public function showLinks($variable=null)
	{
		return View::make('home.index',array('variable'=>$variable));
	}
	public function getForm()
	{
			return View::make('home.form');
	}
	public function showArticles()
	{
			return View::make('home.articles');
	}

}
