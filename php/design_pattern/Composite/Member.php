<?php

require_once 'IOrganization.php';

class Member implements IOrganization {

	private $name;

	public function __construct($name) {
		$this->name = $name;
	}

	public function dump() {
		var_dump($this->name);
	}

}
