<?php

class HomeController extends BaseController {
	public function showLinks($variable=null)
	{
		return View::make('home.index',array('variable'=>$variable));
	}
	public function getAction()
	{
			return View::make('home.form');
	}
	public function showActions()
	{
			return View::make('home.form');
	}

}
