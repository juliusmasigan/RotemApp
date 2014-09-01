<?php

class Answer extends Eloquent {

	protected $table = "answers";

	public $incrementing = true;

	public static function query() {
		return $this->belongsTo('Query');
	}

}
