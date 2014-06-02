<?php

require_once 'Upper.php';
require_once 'Lower.php';
require_once 'Exclaim.php';

class StrategyString {

	private $strategy = NULL;

	public function __construct($type) {
		switch ($type) {
			case 'u':
				$this->strategy = new Upper();
				break;
			case 'l':
				$this->strategy = new Lower();
				break;
			case 'e':
				$this->strategy = new Exclaim();
				break;
			default:
				throw new Exception('選択できないタイプです。');
		}
	}

	public function getString($string) {
		return $this->strategy->convert($string);
	}

}
