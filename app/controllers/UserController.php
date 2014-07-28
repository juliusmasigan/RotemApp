<?php

class UserController extends \BaseController {

	public function login()
	{
		print_r(User::all());exit;
	}

	public function register()
	{
		$inputs = Input::all();

		$student_attr = array();
		$student;
		if(strtolower($inputs['userType']) == "student") {
			$student_attr['first_name'] = $inputs['firstName'];
			$student_attr['last_name'] = $inputs['lastName'];
			$student_attr['email'] = $inputs['email'];
			$student_attr['contact_number'] = $inputs['mNumber'];
			$student_attr['parents_name'] = $inputs['parentsName'];
			$student = Student::create($student_attr);

			print_r($student);exit;
			$student->save();
		}

		User::create(array(
			'username' => $inputs['username'],
			'password' => md5($inputs['password']),
			'user_type' => strtolower($inputs['userType']),
			'user_entity_id' => $student->id
		));
	}

}
