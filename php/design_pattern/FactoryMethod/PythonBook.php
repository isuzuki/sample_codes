<?php

require_once 'AbstractBook.php';

class PythonBook extends AbstractBook {

	public function getTitle() {
		return 'Python HACK';
	}

	public function getLanguage() {
		return 'python';
	}
}
