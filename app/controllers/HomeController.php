<?php

class HomeController extends BaseController {
	public function showLinks($variable)
	{
		return View::make('home.index',array('variable'=>$variable));
	}

}
