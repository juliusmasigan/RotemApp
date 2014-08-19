<?php

class AdminController extends \BaseController {

	public function register()
	{
		$posts = Input::all();
	
		$rules = array(
			'institution' => 'required',
			'phone' => 'required|numeric'
		);
		$validator = Validator::make($posts, $rules);
		$validator->setAttributeNames(array(
			'institution' => "Institution",
			'phone' => "Phone number"
		));

		//Check if instituion already exists.
		$institution = Institution::where('name', $posts['institution'])->get();

		if($validator->fails() || count($institution)) {
			$errors = $validator->errors();
			if(count($institution)) {
				$errors->add('institution', 'The Institution is already registered.');
			}
			return Redirect::to('register')->withErrors($errors)->withInput($posts);
		}

		return Redirect::to('register')->with('pre_registration', true)->withInput($posts);
	}

	public function post_register()
	{
		$posts = Input::all();

		$rules = array(
			'email' => 'required|email',
			'fullName' => 'required',
			'password' => 'required'
		);
		$validator = Validator::make($posts, $rules);
		$validator->setAttributeNames(array(
			'email' => 'Email',
			'fullName' => 'Full name',
			'password' => 'Password'
		));

		//Check if email is already registered.
		$administrator = Administrator::where('email', $posts['email'])->get();

		if($validator->fails() || count($administrator)) {
			$errors = $validator->errors();
			if(count($administrator)) {
				$errors->add('email', 'The Email is already registered.');
			}
			return Redirect::to('register')->withErrors($errors)->withInput($posts)->with('pre_registration', true);
		}

		//New Administator model instance.
        $administrator = new Administrator;

		//New Institution model instance.
		$institution = new Institution;

		$institution_id = $institution->insertGetId(array(
			'name' => $posts['institution'],
			'number_students' => $posts['numberStudents'],
		));

        $admin_id = $administrator->insertGetId(array(
            'domain' => $posts['domain'].".skillquest.com",
            'contact_number' => $posts['phone'],
			'institution_id' => $institution_id,
			'email' => $posts['email'],
			'full_name' => $posts['fullName'],
			'password' => md5($posts['password']),
        ));

		Session::put('uid', $admin_id);
		Session::push('user.name', $posts['fullName']);
		Session::push('user.type', 'admin');
		return Redirect::to('dashboard');
	}

	public function login() {
		$posts = Input::all();

		$admin = Administrator::where('email', $posts['username'])->where('password', md5($posts['password']))->first();

		if(is_null($admin)) {
			return Redirect::to("/")->withInput($posts)->withErrors(array(
				'account' => 'Invalid username or password.'
			));
		}

		//Set a session.
		Session::put('uid', $admin->id);
		Session::push('user.name', $admin->full_name);
		Session::push('user.type', 'admin');
		return Redirect::to('dashboard');
	}

	public function list_students() {
		//Get all the list of students and their registration status.
		$students = DB::table('students as s')
		->join('registrations as r', 's.id', '=', 'r.user_id')
		->whereNotNull('r.status', 'and', true)
		->where('r.registration_type', 'student')
		->select('s.id as id', 'r.status as status', 's.full_name as full_name', 's.email as email')
		->get();

		return View::make('admin.students', array('students' => $students, 'page' => 'students'));
	}

	public function list_teachers() {
		//Get all the list of teachers and their registration status.
		$teachers = DB::table('teachers as t')
		->join('registrations as r', 't.id', '=', 'r.user_id')
		->whereNotNull('r.status', 'and', true)
		->where('r.registration_type', 'teacher')
		->select('t.id as id', 'r.status as status', 't.full_name as full_name', 't.email as email')
		->get();

		return View::make('admin.teachers', array('teachers' => $teachers, 'page' => 'staffs'));
	}

}
