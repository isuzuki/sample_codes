<?php

require_once 'Article.php';
require_once 'IArticleState.php';

class ArticleStateOpen implements IArticleState {

	public function showArticle(Article $article) {
		return sprintf('subject : %s, body : %s', $article->getSubject(), $article->getBody());
	}

	public function canShow($member) {
		return true;
	}

	public function isPublished() {
		return true;
	}

}
