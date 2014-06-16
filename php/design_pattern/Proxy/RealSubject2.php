<?php

require_once 'ISubject.php';

class RealSubject2 implements ISubject {

	public function doMethod1() {
		echo "class2 method1\n";
	}

	public function doMethod2() {
		echo "class2 method2\n";
	}

	public function doMethod3() {
		echo "class2 method3\n";
	}

}
