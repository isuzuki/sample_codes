<?php

/**
 * スカラー型、返り値タイプヒンティングのサンプル
 */
function sum(int $x, int $y): int {
	return $x + $y;
}

echo sum(2, 3);
