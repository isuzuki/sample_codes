<?php

require_once 'PhpBook.php';
require_once 'PythonBook.php';

class BookFactory {

	public function createBook($theme) {
		$instance = null;
		switch ($theme) {
			case 'php':
				$instance = new PhpBook();
				break;
			case 'python':
				$instance = new PythonBook();
				break;
			default:
				throw new InvalidArgumentException('対象外のテーマです。');
		}

		return $instance;
	}
}
