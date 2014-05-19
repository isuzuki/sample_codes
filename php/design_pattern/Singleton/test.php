<?php

require_once 'Singleton.php';

$obj1 = Singleton::getInstance();
$obj2 = Singleton::getInstance();
var_dump($obj1 === $obj2);

clone $obj1;
