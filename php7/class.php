<?php

/**
 * 匿名クラスのサンプル
 */
$dt = new class() extends DateTime {
    public function test() {
        return $this->format('Y/m/d');
    }
};

echo $dt->test();
