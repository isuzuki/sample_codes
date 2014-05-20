<?php

class HtmlPage {

	private $page = null;
	private $title = null;
	private $heading = null;
	private $text = null;

	public function showPage() {
		return $this->page;
	}

	public function setTitle($title) {
		$this->title = $title;
	}

	public function setHeading($heading) {
		$this->heading = $heading;
	}

	public function setText($text) {
		$this->text .= $text;
	}

	public function format() {
		$this->page = <<<HTML
<html>
	<head>
		<title>{$this->title}</title>
	</head>
	<body>
		<p>{$this->text}</p>
	</body>
</html>
HTML;
	}
}
