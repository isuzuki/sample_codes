<?php

require_once 'Inner.php';

class Outer extends Inner {

	protected $inner = null;

	public function __construct($obj) {
		$this->inner = $obj;
	}

	public function getName() {
		return $this->inner->getName() .' in Outer';
	}

}
