<?php

require_once 'Article.php';

interface IArticleState {

	public function showArticle(Article $article);

	public function canShow($member);

	public function isPublished();

}
