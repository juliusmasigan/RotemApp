<?php

class Query extends Eloquent {

	protected $table = "queries";

	public $incrementing = true;

	public $timestamps = false;

	public function answer() {
		return $this->hasMany('Answer', 'query_id');
	}

	public function topic() {
		return $this->belongsTo('Topic');
	}

	public function student() {
		return $this->belongsTo('Student');
	}

}
