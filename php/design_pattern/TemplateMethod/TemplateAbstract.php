<?php

require_once 'Book.php';

abstract class TemplateAbstract {

	public final function showBookInfo(Book $book) {
		$title = $book->getTitle();
		$author = $book->getAuthor();

		$processed_title = $this->processTitle($title);
		$processed_author = $this->processAuthor($author);
		if ($processed_author == null) {
			$processed_info = $processed_title;

		} else {
			$processed_info = $processed_title .' by '. $processed_author;
		}

		return $processed_info;
	}

	abstract public function processTitle($title);

	public function processAuthor($author) {
		return NULL;
	}
}
