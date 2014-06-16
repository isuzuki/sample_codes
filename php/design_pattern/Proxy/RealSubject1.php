<?php

require_once 'ISubject.php';

class RealSubject1 implements ISubject {

	public function doMethod1() {
		echo "class1 method1\n";
	}

	public function doMethod2() {
		echo "class1 method2\n";
	}

	public function doMethod3() {
		echo "class1 method3\n";
	}

}
