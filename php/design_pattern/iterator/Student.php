<?php

class Student {
	protected $name;
	protected $sex;

	public function __construct($name, $sex) {
		$this->name = $name;
		$this->sex = $sex;
	}

	public function get_name() {
		return $this->name;
	}

	public function get_sex() {
		return $this->sex;
	}
}
