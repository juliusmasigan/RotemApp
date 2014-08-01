<?php

class TeacherController extends \BaseController {

	public function register() {
		$posts = Input::all();

		$rules = array(
			'fullName' => 'required',
			'email' => 'required',
			'phone' => 'required|numeric',
			'password' => 'required',
		);
		$validator = Validator::make($posts, $rules);
		$validator->setAttributeNames(array(
			'fullName' => 'Full name',
			'email' => 'Email address',
			'phone' => 'Phone',
			'password' => 'Password',
		));

		//Check if email is already registered.
		$teachers = Teacher::where('email', $posts['email'])->get();

		$not_match = ($posts['password'] != $posts['confirmPassword']) ? true:false;
		if($validator->fails() || $not_match || count($teachers)) {
			$errors = $validator->errors();
			if($not_match) {
				$errors->add('password', 'The Password doesn\'t match.');
			}
			if(count($teachers)) {
				$errors->add('email', 'The Email is already registered.');
			}

			return Redirect::to('teachers/register')->withErrors($errors)->withInput($posts);
		}

		//Generate random verification code.
		$ver_code = Registration::gencode();

		//New Teacher model instance.
		$teacher = new Teacher;

		//New Registration model instance.
		$registration = new Registration;

		$teacher_id = $teacher->insertGetId(array(
			'full_name' => $posts['fullName'],
			'contact_number' => $posts['phone'],
			'email' => $posts['email'],
			'password' => md5($posts['password']),
		));

		$registration->insert(array(
			'user_id' => $teacher_id,
			'registration_type' => 'teacher',
			'verification_code' => $ver_code,
			'status' => 'pending',
		));

		//Send a confirmation email.
		Mail::send('email.registration', array(), function($message) use($posts) {
			$message->to($posts['email'], $posts['fullName']);
			$message->subject('Skillquest Registration Confirmation');
		});

		return Redirect::to('/');
	}

}
