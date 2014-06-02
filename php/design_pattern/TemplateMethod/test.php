<?php

require_once 'TemplateExclamation.php';
require_once 'TemplateStars.php';

$exclamation = new TemplateExclamation();
$stars = new TemplateStars();

$book = new Book('hogeeee', 'PHP');
var_dump($exclamation->showBookInfo($book));
var_dump($stars->showBookInfo($book));
