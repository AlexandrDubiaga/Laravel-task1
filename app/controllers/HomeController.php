<?php

class HomeController extends BaseController {
	public function showLinks($variable)
	{
		return View::make('hello',array('variable'=>$variable));
	}

}
