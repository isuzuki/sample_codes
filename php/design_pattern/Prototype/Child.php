<?php

class Child {

	private $values = [];

	public function __set($key, $val) {
		$this->values[$key] = $val;
	}

	public function __get($key) {
		return $this->values[$key];
	}
}
