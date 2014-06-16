<?php

require_once 'IObserver.php';

class Listner implements IObserver {

	private $name = null;

	public function __construct($name) {
		$this->name = $name;
	}

	public function receive($music) {
		echo "$this->name が $music を聴きました\n";
	}

}
