<?php

function toggle() {
	while (true) {
		yield 'odd';
		yield 'even';
	}
}

foreach (toggle() as $i => $val) {
	if ($i >= 10) {
		break;
	}
	echo "$i : $val\n";
}
