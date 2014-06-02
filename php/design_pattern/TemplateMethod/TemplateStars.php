<?php

require_once 'TemplateAbstract.php';

class TemplateStars extends TemplateAbstract {

	public function processTitle($title) {
		return $title .'***';
	}
}
