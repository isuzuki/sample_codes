<?php

require_once 'Article.php';
require_once 'IArticleState.php';

class ArticleStateDraft implements IArticleState {

	public function showArticle(Article $article) {
		return sprintf('subject : %s, body : %s (下書き中です。)', $article->getSubject(), $article->getBody());
	}

	public function canShow($member) {
		return $member == 'self';
	}

	public function isPublished() {
		return false;
	}

}
