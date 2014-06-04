<?php

require_once 'Article.php';

$article1 = new Article(Article::OPEN);
var_dump($article1->showArticle());

$article2 = new Article(Article::CLOSED);
var_dump($article2->showArticle());

$article3 = new Article(Article::DRAFT);
var_dump($article3->showArticle());
