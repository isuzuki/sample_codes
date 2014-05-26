<?php

class Prototype {

	private $values = [];

	public function __set($key, $val) {
		$this->values[$key] = $val;
	}

	public function __get($key) {
		return $this->values[$key];
	}

	public function __clone() {
		foreach ($this->values as $key => $val) {
			if (is_object($val)) {
				$this->$key = clone $val;
				continue;
			}
			$this->$key = $val;
		}
	}
}
