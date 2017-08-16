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
	public function postForm($user = 'user')
	{
			echo "POST";
	}
	public function showArticles()
	{
			return View::make('home.articles',array('link'=>array(1,2,3,4,5,6,7,8,9,10)));
	}

}
