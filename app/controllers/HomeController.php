<?php

class HomeController extends BaseController
{
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
		else
		{
			return Redirect::to('form');
		}
	}
	public function getViewThank($name = 'user')
	{
				return View::make('home.Thank',array('name'=>$name));
			
	}
	public function showArticles()
	{
			return View::make('home.articles',array('name'=>array(1,2,3,4,5,6,7,8,9,10)));
	}
	public function getLink($link)
	{
			return View::make('home.oneArticle',array('link'=>$link));
	}
	public function getAbout()
	{
			return View::make('home.about');
	}
	
}
