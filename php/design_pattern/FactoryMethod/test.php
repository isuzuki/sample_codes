<?php

require_once 'BookFactory.php';

$factory = new BookFactory();

$php = $factory->createBook('php');
var_dump($php->getTitle());
var_dump($php->getLanguage());

$python = $factory->createBook('python');
var_dump($python->getTitle());
var_dump($python->getLanguage());
