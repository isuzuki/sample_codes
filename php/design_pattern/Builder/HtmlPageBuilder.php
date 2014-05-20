<?php

require_once 'IPageBuilder.php';
require_once 'HtmlPage.php';

class HtmlPageBuilder implements IPageBuilder {

	private $page = null;

	public function __construct() {
		$this->page = new HtmlPage();
	}

	public function setTitle($title) {
		$this->page->setTitle($title);
	}

	public function setHeading($heading) {
		$this->heading = $heading;
	}

	public function setText($text) {
		$this->page->setText($text);
	}

	public function format() {
		$this->page->format();
	}

	public function getPage() {
		return $this->page;
	}

}
