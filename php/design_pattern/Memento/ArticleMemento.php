<?php // Memento

class ArticleMemento {

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

	public function getDatetime() {
		return $this->datetime;
	}

}
