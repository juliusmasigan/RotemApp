<?php

class Classes extends Eloquent {

	protected $table = 'classes';

	public $incrementing = true;

	public function student() {
		return $this->hasMany('Student');
	}

}
