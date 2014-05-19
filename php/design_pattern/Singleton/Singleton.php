<?php

class Singleton {

	private static $instance = null;
	private $num = 0;

	public static function getInstance() {
		if (static::$instance === null) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	private function __construct() {
		$this->num = mt_rand(1, 10000);
	}

	public function getNum() {
		return $this->num;
	}

	public function __clone() {
		throw new RuntimeException('cloneできないクラスです');
	}
}
