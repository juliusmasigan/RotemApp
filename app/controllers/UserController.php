<?php

class UserController extends \BaseController {

	public function register() {
		$posts = Input::all();

		//New model instantiation.
		$student = new Student;
		$user = new User;

		//Set rules for the user inputs.
		$rules = array(
			'firstName' => 'required',
			'lastName' 	=> 'required',
			'mNumber' 	=> 'required|numeric',
			'email' 	=> 'required|email',
		);
		$validator = Validator::make($posts, $rules);
		$validator->setAttributeNames(array(
			'firstName' 	=> 'First Name',
			'lastName' 		=> 'Last Name',
			'parentsName' 	=> 'Parent\'s Name',
			'mNumber' 		=> 'Mobile Number',
			'email' 		=> 'Email',
		));

		//Validate the user inputs.
		if($validator->fails()) {
			return Redirect::to('register')->withErrors($validator)->withInput($posts);
		}
	
		if(strtolower($posts['userType']) == 'student') {
				
		}elseif(strtolower($posts['userType']) == 'teacher') {
		}
	}

}
