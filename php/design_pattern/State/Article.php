<?php

require_once 'ArticleStateOpen.php';
require_once 'ArticleStateClosed.php';
require_once 'ArticleStateDraft.php';

class Article {

	const OPEN = 1;
	const CLOSED = 2;
	const DRAFT = 3;

	private $subject = null;
	private $body = null;
	private $state = null;

	public function __construct($id) {
		$article = $this->find($id);
		$this->subject = $article['subject'];
		$this->body = $article['body'];

		switch ($article['state']) {
			case static::OPEN:
				$this->state = new ArticleStateOpen();
				break;
			case static::CLOSED:
				$this->state = new ArticleStateClosed();
				break;
			case static::DRAFT:
				$this->state = new ArticleStateDraft();
				break;
			default:
				throw new Exception(sprintf('存在しないstateです。 $state : %s', $article['state']));
		}
	}

	public function find($id) {
		$data = [
			static::OPEN => [
				'subject' => 'open article1',
				'body' => 'test1',
				'state' => static::OPEN,
			],
			static::CLOSED => [
				'subject' => 'closed article2',
				'body' => 'test2',
				'state' => static::CLOSED,
			],
			static::DRAFT => [
				'subject' => 'draft article3',
				'body' => 'test3',
				'state' => static::DRAFT,
			],
		];

		if (isset($data[$id]) === FALSE) {
			throw new Exception('存在しないIDです。');
		}

		return $data[$id];
	}

	public function getSubject() {
		return $this->subject;
	}

	public function getBody() {
		return $this->body;
	}

	public function showArticle() {
		return $this->state->showArticle($this);
	}
}
