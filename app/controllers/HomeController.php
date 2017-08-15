<?php

class HomeController extends BaseController {
	public function showLinks($variable=null)
	{
		return View::make('home.index',array('variable'=>$variable));
	}
	/*public function getAction()
	{
			return View::make('home.actions');
	}*/
	public function showActions($var=null)
	{
			return View::make('home.actions',array('var'=>$var));
	}

}
