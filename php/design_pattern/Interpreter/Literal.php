<?php

require_once 'IMathExpression.php';

class Literal implements IMathExpression {

	private $value;

	public function __construct($value) {
		$this->value = $value;
	}

	public function evaluate(array $values) {
		return $this->value;
	}

}
