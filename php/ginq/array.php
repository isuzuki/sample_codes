<?php
/**
 * 配列からginqを通しての処理サンプル
 */

require_once 'vendor/autoload.php';

$array = Ginq::from(range(1, 100))
    ->where(function ($value) {
        return $value % 7 === 0;
    })
    ->select(function ($value) {
        return $value * 2;
    })
    ->toArray();

var_dump($array);
