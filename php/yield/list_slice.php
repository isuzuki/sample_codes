<?php

function list_slice($list, $n) {
	$slice_list = [];
	foreach ($list as $val) {
		$slice_list[] = $val;
		if (count($slice_list) === $n) {
			yield $slice_list;
			$slice_list = [];
		}
	}

	// padding
	if (!empty($slice_list)) {
		$i = $n - count($slice_list);
		while ($i--) {
			$slice_list[] = 0;
		}

		yield $slice_list;
	}
}

$numbers = range(1, 22);
foreach (list_slice($numbers, 4) as $slice_nums) {
	var_dump($slice_nums);
}
