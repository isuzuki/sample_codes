<?php

function fibonacci() {
	$x = 0;
	$y = 1;
	while (true) {
		yield $x;
		list($x, $y) = [$y, $x + $y];
	}
}

foreach (fibonacci() as $value) {
	if (10000 < $value) {
		break;
	}

	var_dump($value);
}
