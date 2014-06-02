<?php

require_once 'TemplateAbstract.php';

class TemplateExclamation extends TemplateAbstract {

	public function processTitle($title) {
		return $title .'!!!';
	}

	public function processAuthor($author) {
		return $author .'!!!!!';
	}
}
