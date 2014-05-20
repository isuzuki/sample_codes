<?php

require_once 'HtmlPageBuilder.php';
require_once 'HtmlPageDirector.php';

$director = new HtmlPageDirector(new HtmlPageBuilder());
$director->buildPage();
var_dump($director->getPage()->showPage());
