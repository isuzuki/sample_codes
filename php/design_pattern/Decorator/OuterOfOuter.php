<?php

class OuterOfOuter extends Outer {

	protected $inner = null;

	public function __construct($obj) {
		$this->inner = $obj;
	}

	public function getName() {
		return $this->inner->getName() . ' in OuterOfOuter';
	}

}
