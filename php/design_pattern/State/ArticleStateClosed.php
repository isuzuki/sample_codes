<?php

require_once 'Article.php';
require_once 'IArticleState.php';

class ArticleStateClosed implements IArticleState {

	public function showArticle(Article $article) {
		return '公開終了した記事です。';
	}

	public function canShow($member) {
		return false;
	}

	public function isPublished() {
		return false;
	}

}
