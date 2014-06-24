<?php

require_once 'IMathExpression.php';

class Variable implements IMathExpression {

	private $letter;

	public function __construct($letter) {
		$this->letter = $letter;
	}

	public function evaluate(array $values) {
		return $values[$this->letter];
	}

}
