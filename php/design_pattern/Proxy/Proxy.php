<?php

require_once 'ISubject.php';

class Proxy {

	protected $subject = null;

	public function __construct(ISubject $obj) {
		$this->subject = $obj;
	}

	public function doMethod1() {
		$this->subject->doMethod1();
	}

	public function doMethod2() {
		$this->subject->doMethod2();
	}

	public function doMethod3() {
		$this->subject->doMethod3();
	}

}
