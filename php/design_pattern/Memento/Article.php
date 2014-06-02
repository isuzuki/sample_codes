<?php // Originator

require_once 'ArticleMemento.php';

class Article {

	private $subject = null;
	private $body = null;
	private $datetime = null;

	public function setSubject($subject) {
		$this->subject = $subject;
	}

	public function getSubject() {
		return $this->subject;
	}

	public function setBody($body) {
		$this->body = $body;
	}

	public function getBody() {
		return $this->body;
	}

	public function setDateTime($datetime) {
		$this->datetime = $datetime;
	}

	public function getDateTime() {
		return $this->datetime;
	}

	public function createMemento() {
		$obj = new ArticleMemento();
		$obj->setSubject($this->getSubject());
		$obj->setBody($this->getBody());
		$obj->setDateTime($this->getDateTime());

		return $obj;
	}

	public function setMemento(ArticleMemento $obj) {
		$this->setSubject($obj->getSubject());
		$this->setBody($obj->getBody());
		$this->setDateTime($obj->getDateTime());
	}
}
