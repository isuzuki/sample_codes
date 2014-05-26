<?php

require_once 'Prototype.php';
require_once 'Child.php';

$obj = new Prototype();
$obj->hoge = 'fuga';

$obj2 = clone $obj;

$obj->hoge = 'fooo';
var_dump($obj->hoge);
var_dump($obj2->hoge);

$obj->child = new Child();
$obj->child->editor = 'vim';

$obj2 = clone $obj;
$obj2->child->editor = 'emacs';

var_dump($obj->child->editor);
var_dump($obj2->child->editor);
