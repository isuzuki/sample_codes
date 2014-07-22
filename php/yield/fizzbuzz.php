<?php

function fizzbuzz() {
	$n = 0;
	while (true) {
		$n++;
		$fizz = $n % 3 === 0;
		$buzz = $n % 5 === 0;
		if ($fizz && $buzz) {
			yield $n => 'fizzbuzz';
		} else if ($fizz) {
			yield $n => 'fizz';
		} else if ($buzz) {
			yield $n => 'buzz';
		}
	}
}

foreach (fizzbuzz() as $n => $result) {
	if ($n > 100) {
		break;
	}
	echo "$n : $result\n";
}
