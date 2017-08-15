<?php

class HomeController extends BaseController {
	public function showLinks($variable=null)
	{
		return View::make('home.index',array('variable'=>$variable));
	}

}
