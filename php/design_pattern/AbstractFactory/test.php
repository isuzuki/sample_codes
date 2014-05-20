<?php

require_once 'House.php';
require_once 'JapaneseHouseFactory.php';
require_once 'ForeignHouseFactory.php';

$j_factory = new JapaneseHouseFactory();
$f_factory = new ForeignHouseFactory();

$j_house = new House();
$j_house->setDoor($j_factory->createDoor());
$j_house->setWindow($j_factory->createWindow());

$f_house = new House();
$f_house->setDoor($f_factory->createDoor());
$f_house->setWindow($f_factory->createWindow());

var_dump($j_house);
var_dump($f_house);
