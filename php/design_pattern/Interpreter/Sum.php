<?php

require_once 'IMathExpression.php';

class Sum implements IMathExpression {

	private $a;
	private $b;

	public function __construct(IMathExpression $a, IMathExpression $b) {
		$this->a = $a;
		$this->b = $b;
	}

	public function evaluate(array $values) {
		return $this->a->evaluate($values) + $this->b->evaluate($values);
	}

}
