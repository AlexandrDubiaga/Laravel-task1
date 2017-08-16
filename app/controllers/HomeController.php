<?php

class HomeController extends BaseController {
	public function showLinks($variable=null)
	{
		return View::make('home.index',array('variable'=>$variable));
	}
	public function getForm($user = 'user')
	{
			return View::make('home.form',array('name'=>$user));
	}
	public function postForm()
	{
			if (Input::has('name') && Input::has('area') )
			{
				return Redirect::to('Thank');
			}
	}
	public function getViewThank($name = 'user')
	{
				return View::make('home.Thank',array('name'=>$name));
			
	}
	public function showArticles()
	{
			return View::make('home.articles',array('link'=>array(1,2,3,4,5,6,7,8,9,10)));
	}
	public function getLink()
	{
			return View::make('home.articles');
	}

}
