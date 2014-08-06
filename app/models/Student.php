<?php

class Student extends Eloquent {

	protected $table = 'students';

	public $incrementing = true;

	public function registration() {
		return $this->hasMany('Registration', 'user_id');
	}

}
