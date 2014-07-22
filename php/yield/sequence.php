<?php

function sequence($from, $to, $step = 1) {
	for ($i = $from; $i <= $to; $i += $step) {
		yield $i;
	}
}

foreach (sequence(1, 100, 2) as $value) {
	var_dump($value);
}
