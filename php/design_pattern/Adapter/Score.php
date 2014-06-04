<?php

class Score {

	private $user_point = 0;

	public function __construct($user_point) {
		$this->user_point = $user_point;
	}

	public function add($payment_point) {
		$this->user_point += $payment_point;
	}

	public function getUserPoint() {
		return $this->user_point;
	}

}
