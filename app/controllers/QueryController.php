<?php

class QueryController extends \BaseController {

	public function page_index() {
		if(!Session::has('uid'))
			return Redirect::to("/");

		$queries = DB::table('queries as q')
		->join('answers as a', 'a.id', '=', 'q.answer_id')
		->join('topics as t', 't.id', '=', 'q.topic_id')
		->join('students as s', 's.id', '=', 'q.student_id')
		->get();

		$topics_tmp = Topic::all();
		$topics = array();
		foreach($topics_tmp as $topic) {
			$topics[$topic->id] = $topic->name;
		}

		$user_type_array = Session::get('user.type');
		
		if($user_type_array[0] == "student")
			return View::make('student.queries', array('topics' => $topics, 'queries' => $queries, 'page' => 'queries'));
	}

}
