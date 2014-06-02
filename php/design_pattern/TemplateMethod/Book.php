<?php

class Book {

	private $author;
	private $title;

	public function __construct($author, $title) {
		$this->author = $author;
		$this->title = $title;
	}

	public function getAuthor() {
		return $this->author;
	}

	public function getTitle() {
		return $this->title;
	}
}
