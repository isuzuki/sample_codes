<?php

require_once 'AbstractBook.php';

class PhpBook extends AbstractBook {

	public function getTitle() {
		return 'PHP HACK';
	}

	public function getLanguage() {
		return 'PHP';
	}
}
