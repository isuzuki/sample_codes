<?php

require_once 'Article.php';
require_once 'ArticleCareTaker.php';

date_default_timezone_set('Asia/Tokyo');

$article = new Article();
$article->setSubject('1st subject');
$article->setBody('1st body');
$article->setDateTime(date('Y-m-d H:i:s'));

var_dump($article->getSubject());
var_dump($article->getBody());
var_dump($article->getDateTime());

$article_care_taker = new ArticleCareTaker();
$article_care_taker->setMemento($article->createMemento());

$article->setSubject('2nd subject');
$article->setBody('2nd body');
$article->setDateTime(date('Y-m-d H:i:s', strtotime('+1 hour')));

var_dump($article->getSubject());
var_dump($article->getBody());
var_dump($article->getDateTime());

$article->setMemento($article_care_taker->getMemento());
var_dump($article->getSubject());
var_dump($article->getBody());
var_dump($article->getDateTime());
