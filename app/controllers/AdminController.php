<?php

class AdminController extends \BaseController {

	public function register()
	{
		$posts = Input::all();
		
		$rules = array(
			'institution' => 'required',
			'phone' => 'required'
		);
		$validator = Validator::make($posts, $rules);
		$validator->setAttributeNames(array(
			'institution' => "Institution",
			'phone' => "Phone Number"
		));
		if($validator->fails()) {
			return Redirect::to('register')->withErrors($validator)->withInput($posts);
		}

		//New Administator model instance.
		$administrator = new Administrator;

		$record = $administrator->insert(array(
			'domain' => $posts['domain'],
			'contact_number' => $posts['phone'],
		));
	}

}
