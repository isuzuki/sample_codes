<?php

require_once 'FlyWeightFactory.php';

$factory = FlyWeightFactory::getInstance();
var_dump($factory->get('fizz'));
var_dump($factory->get('buzz'));
var_dump($factory->get('fizz'));
var_dump($factory->get('fizz'));
var_dump($factory->get('fizz'));
var_dump($factory->get('buzz'));
var_dump($factory->get('piyo'));
var_dump($factory->get('piyo'));
