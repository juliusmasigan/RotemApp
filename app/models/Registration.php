<?php

class Registration extends Eloquent {

	protected $table = 'registrations';

	public $incrementing = true;

	public $timestamps = false;

	public static function gencode() {
		list($sec, $usec) = explode(" ", microtime());
		$seed = (float) $sec + ((float) $usec * 100000);
		mt_srand($seed);
		
		return str_pad(mt_rand(), 10, '1', STR_PAD_BOTH);
	}

	public static function confirm_link($args = NULL, $user_type) {
		if(!is_null($args) || !empty($args)) {
			$hash = md5($args['email']."-".$args['code']."-".$args['password']);
			return link_to("{$user_type}/confirm/{$args['email']}/{$hash}", null);
		}
	}

}
