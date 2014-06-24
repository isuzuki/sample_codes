<?php

require_once 'Literal.php';
require_once 'Sum.php';
require_once 'Product.php';
require_once 'Variable.php';

$expression = new Product(new Literal(10), new Sum(new Variable('a'), new Literal(3)));
echo $expression->evaluate(array('a' => 4)), "\n";
