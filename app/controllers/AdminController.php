<?php

class AdminController extends \BaseController {

	public function register()
	{
		$posts = Input::all();
		
		$rules = array(
			'institution' => 'required',
			'phone' => 'required'
		);
	}

}