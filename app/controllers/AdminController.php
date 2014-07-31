<?php

class AdminController extends \BaseController {

	public function pre_register()
	{
		$posts = Input::all();
		
		$rules = array(
			'institution' => 'required',
			'phone' => 'required|numeric'
		);
		$validator = Validator::make($posts, $rules);
		$validator->setAttributeNames(array(
			'institution' => "Institution",
			'phone' => "Phone Number"
		));
		if($validator->fails()) {
			return Redirect::to('register')->withErrors($validator)->withInput($posts);
		}

		//Session::flash('pre_register_data', $posts);
		return Redirect::to('register')->with('pre_registration', true)->withInput($posts);

		//New Administator model instance.
		/*$administrator = new Administrator;

		$record = $administrator->insert(array(
			'domain' => $posts['domain'],
			'contact_number' => $posts['phone'],
		));*/
	}

	public function register()
	{
		$posts = Input::all();
		print_r($posts);
	}

}
