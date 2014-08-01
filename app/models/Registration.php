<?php

class Registration extends Eloquent {

	protected $table = 'registrations';

	public $incrementing = true;

	public static function gencode() {
		list($sec, $usec) = explode(" ", microtime());
		$seed = (float) $sec + ((float) $usec * 100000);
		mt_srand($seed);
		
		return str_pad(mt_rand(), 10, '1', STR_PAD_BOTH);
	}

}
