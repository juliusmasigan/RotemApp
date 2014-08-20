<?php

class AlertController extends \BaseController {

	public function post() {
		$posts = Input::all();

		if($posts['mode']=='email') {
			$this->postByEmail($posts);
		}
	}

	private function postByEmail($params) {
		$recipients = array();
		print_r($params);exit;

		Mail::send('email.alerts', array('message' => $posts['message']), function($message){

		});
	}

}