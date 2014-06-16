<?php

require_once 'Organization.php';
require_once 'CountVisitor.php';
require_once 'DumpVisitor.php';

$organization = new Organization();
$organization->entry('hoge');
$organization->entry('fuga');

var_dump($organization->accept(new CountVisitor()));

$organization->entry('piyo');
$organization->accept(new DumpVisitor());
