<?php

require_once 'FlyWeight.php';

class FlyWeightFactory {

	private $objects = [];
	private static $self = null;

	public static function getInstance() {
		if (static::$self === null) {
			static::$self = new static();
		}

		return static::$self;
	}

	private function __construct() {
	}

	public function get($key) {
		if (isset($this->objects[$key]) === false) {
			$this->objects[$key] = new FlyWeight($key);
		}

		return $this->objects[$key];
	}
}
