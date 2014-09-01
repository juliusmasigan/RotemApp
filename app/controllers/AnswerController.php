<?php

class AnswerController extends \BaseController {

	public function post() {
		$posts = Input::all();

		$user_type_arr = Session::get('user.type');

		//Only teachers can post answers
		if($user_type_arr[0] != "teacher")
			return Redirect::to("queries")->withErrors(array('Posting answer is not allowed for this user.'))->withInput($posts);

		$rules = array(
			'answer' => 'required',
			'query_id' => 'required|numeric',
		);

		$validator = Validator::make($posts, $rules);

		if($validator->fails())
			return Redirect::to('queries')->withErrors($validator)->withInput($posts);

	}

}
