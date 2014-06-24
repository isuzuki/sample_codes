<?php

require_once 'IData.php';

class StringData implements IData {

	private $string;
	private $pos = 0;

	public function __construct($string) {
		$this->data = $string;
	}

	public function read() {
		$char = substr($this->data, $this->pos, 1);
		$this->pos++;

		return $char;
	}

	public function all() {
		return $this->data;
	}

}
