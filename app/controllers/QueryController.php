<?php

class QueryController extends \BaseController {

	public function page_index() {
		if(!Session::has('uid'))
			return Redirect::to("/");

		$queries = Query::with('answer')
		->with('topic')
		->with('student')
		->get();
		//echo "<pre>".print_r($queries,1)."</pre>"; exit;

		$topics_tmp = Topic::all();
		$topics = array();
		foreach($topics_tmp as $topic) {
			$topics[$topic->id] = $topic->name;
		}

		$user_type_array = Session::get('user.type');
		
		if($user_type_array[0] == "student")
			return View::make('student.queries', array('topics' => $topics, 'queries' => $queries, 'page' => 'queries'));
		elseif($user_type_array[0] == "teacher")
			return View::make('teacher.queries', array('topics' => $topics, 'queries' => $queries, 'page' => 'queries'));
	}

	public function post() {
		$posts = Input::all();

		$rules = array(
			'query' => 'required'
		);

		$validator = Validator::make($posts, $rules);
		$validator->setAttributeNames(array(
			'query' => 'Query'
		));

		if($validator->fails()) {
			return Redirect::to('queries')->withErrors($validator)->withInput($posts);
		}

		Query::insert(array(
			'title' => $posts['query'],
			'student_id' => Session::get('uid'),
			'topic_id' => $posts['topic'],
		));

		return Redirect::to("queries");
	}

	public function update() {
		
	}

}
