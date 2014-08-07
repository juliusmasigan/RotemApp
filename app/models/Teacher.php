<?php

class Teacher extends Eloquent {

	protected $table = 'teachers';

	public $incrementing = true;

	public function registration() {
		return $this->hasMany('Registration', 'user_id');
	}

}
