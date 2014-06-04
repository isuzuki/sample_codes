<?php

require_once 'Inner.php';
require_once 'Outer.php';
require_once 'OuterOfOuter.php';
require_once 'SuperOuterOfOuter.php';

$obj = new OuterOfOuter(new Outer(new Inner()));
var_dump($obj->getName());

$obj = new SuperOuterOfOuter(new OuterOfOuter(new Inner()));
var_dump($obj->getName());
