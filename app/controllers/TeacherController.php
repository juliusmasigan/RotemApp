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

			return Redirect::to('teacher/register')->withErrors($errors)->withInput($posts);
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
		));

		//Generate confirmation link.
		$confirm_link = Registration::confirm_link(array(
			'email' => $posts['email'], 
			'password' => md5($posts['password']),
			'code' => $ver_code,
		), 'teacher');

		//Send a confirmation email.
		Mail::send('email.registration', array('link' => $confirm_link, 'verification_code' => $ver_code), function($message) use($posts) {
			$message->to($posts['email'], $posts['fullName']);
			$message->subject('Skillquest Registration Confirmation');
		});

		return Redirect::to('/');
	}

	public function confirm() {
		$posts = Input::all();

		//Get the user's record.
		$teacher = Teacher::where('email', $posts['user'])->first();

		if(is_null($teacher)) {
			$error['user'] = "The user is not yet registered in the system.";
			return Redirect::to("teacher/confirm/{$posts['user']}/{$posts['key']}")->withInput($posts)->withErrors($error);
		}
		
		//Get the registration confirmation code.
		$registration = Registration::where('user_id', $teacher->id)
			->where('registration_type', 'teacher')->where('verification_code', $posts['verification_code'])->first();

		$sys_key = md5($teacher->email."-".$posts['verification_code']."-".$teacher->password);
        $key = $posts['key'];

		if(is_null($registration) || ($sys_key != $key)) {
			$error['user'] = "The verification code is invalid.";
            return Redirect::to("teacher/confirm/{$posts['user']}/{$posts['key']}")->withInput($posts)->withErrors($error);
		}

		//Update the status of the registration to 'approval'.
		$registration->status = 'pending';
		$registration->save();

		return Redirect::to("teacher/login");
	}

	public function login() {
		$posts = Input::all();
	
		$teacher = Teacher::with(array('registration' => function($q) {
			$q->where('registration_type', 'teacher');
		}))->where('email', $posts['username'])->where('password', md5($posts['password']))->first();

		if(is_null($teacher)) {
			$errors['credentials'] = "Invalid username or password.";
			return Redirect::to("teacher/login")->withInput($posts)->withErrors($errors);
		}elseif(is_null($teacher->registration[0]->status)) {
			return Redirect::to('teacher/login')->withInput($posts)->withErrors(array(
				'account' => 'Account not yet verified.'
			));
		}elseif($teacher->registration[0]->status == "pending") {
			return Redirect::to('teacher/login')->withInput($posts)->withErrors(array(
				'account' => 'Account not yet approved.'
			));
		}

		//Set session if verified user.
		Session::put('uid', $teacher->id);
		Session::push('user.name', $teacher->full_name);
		Session::push('user.type', 'teacher');
		return Redirect::to("dashboard");
	}

	public function view($id) {
		//Get the record.
		$teacher = Teacher::with(array('registration' => function($q) {
			$q->where('registration_type', 'teacher');
		}))->find($id);

		return View::make('teacher.view', array('teacher' => $teacher, 'page' => 'staffs'));
	}

	public function approve($id) {
		//Update the status of the registration.
		Registration::where('user_id', $id)->where('registration_type', 'teacher')->update(array('status' => 'approved'));

		return Redirect::to("teachers");
	}

	public function decline($id) {
		//Update the status of the registration.
		Registration::where('user_id', $id)->where('registration_type', 'teacher')->update(array('status' => NULL));

		return Redirect::to('teachers');
	}

}
