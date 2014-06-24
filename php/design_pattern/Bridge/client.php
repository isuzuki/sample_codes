<?php

require_once 'StringData.php';
require_once 'DataReader.php';
require_once 'ExclaimDataReader.php';

$reader = new DataReader(new StringData('hogeeeee'));
var_dump($reader->read());
var_dump($reader->read());
var_dump($reader->read());

$exclaim_reader = new ExclaimDataReader(new StringData('hogeeeee'));
var_dump($exclaim_reader->read());
var_dump($exclaim_reader->read());
