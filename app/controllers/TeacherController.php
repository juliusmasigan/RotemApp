<?php

class TeacherController extends \BaseController {

	public function register() {
		$posts = Input::all();

		$rules = array(
			'name' => 'required',
			'email' => 'required',
			'phone' => 'required|numeric',
			'password' => 'required',
		);
		$validator = Validator::make($posts, $rules);
		$validator->setAttributeNames(array(
			'name' => 'Name',
			'email' => 'Email address',
			'phone' => 'Phone',
			'password' => 'Password',
		));

		$not_match = ($posts['password'] != $posts['confirmPassword']) ? true:false;
		if($validator->fails() || $not_match) {
			$errors = $validator->errors();
			if($not_match) {
				$errors->add('password', 'The Password doesn\'t match.');
			}

			return Redirect::to('teachers/register')->withErrors($errors)->withInput($posts);
		}

		$ver_code = Registration::gencode();

		//Send a confirmation email.
		Mail::send('email.registration', array(), function($message) use($posts) {
			$message->to($posts['email'], $posts['name']);
			$message->subject('Skillquest Registration Confirmation');
		});

		return Redirect::to('teachers/login');
	}

}
