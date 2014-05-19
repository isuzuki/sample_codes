<?php

class FlyWeight {

	private $key = null;
	private $id = null;
	private static $object_id = 1;

	public function __construct($key) {
		$this->key = $key;
		$this->id = static::$object_id++;
	}
}
