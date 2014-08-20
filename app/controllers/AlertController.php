<?php

class AlertController extends \BaseController {

	public function page_index() {
		if(!Session::has('uid'))
        return Redirect::to('/');

		$classes = array();
		$tmp_classes = DB::table('classes as c')
		->join('students as s', 's.class_id', '=', 'c.id')
		->whereNotNull('s.class_id', 'and', true)
		->select('c.name', 'c.id')
		->distinct()
		->get();
		
		foreach ($tmp_classes as $class) { 
			$classes[$class->id] = $class->name;
		}   
		
		if(Session::get('user.type')[0] == 'admin')
			return View::make('admin.alerts', array('page' => 'alerts', 'classes' => $classes));
			
		if(Session::get('user.type')[0] == 'teacher')
			return View::make('teacher.alerts', array('page' => 'alerts', 'classes' => $classes));
	}

	public function post() {
		$posts = Input::all();
		$recipients = array();

		if(in_array('teachers', $posts['recipient'])) {
			$recipients['teachers'] = DB::table('teachers as t')
			->join('registrations as r', 'r.user_id', '=', 't.id')
			->where('r.status', 'approved')
			->where('r.registration_type', 'teacher')
			->select('t.id', 't.full_name', 't.contact_number', 't.email')
			->get();
		}

		if(in_array('students', $posts['recipient'])) {
			$tmp_students = DB::table('students as s')
			->join('registrations as r', 'r.user_id', '=', 's.id')
			->where('r.status', 'approved')
			->where('r.registration_type', 'student')
			->select('s.id', 's.full_name', 's.contact_number', 's.email');

			if(isset($posts['class'])) {
				$tmp_students->whereIn('s.class_id', $posts['class']);
			}
			$recipients['students'] = $tmp_students->get();
        }

		if($posts['mode']=='email') {
			$this->postByEmail(array('message' => $posts['message'], 'recipients' => $recipients));
		}

		return Redirect::to('alerts');
	}

	private function postByEmail($params) {
		//Alert email template for students
		if(isset($params['recipients']['students'])) {
			foreach($params['recipients']['students'] as $recipient) {
				Mail::send('email.alert', array('msg' => $params['message']), function($message) use($recipient){
					$message->to($recipient->email, $recipient->full_name);
					$message->subject('SkillQuest Alerts');
				});
			}
		}

		//Alert email template for teachers
		if(isset($params['recipients']['teachers'])) {
			/*Mail::send('email.alert', array('msg' => $params['message']), function($message) use($params){
                foreach($params['recipients']['teachers'] as $recipient) {
                    $message->to($recipient->email, $recipient->full_name);
                }
                $message->subject('SkillQuest Alerts');
            });*/
        }
	}

}
