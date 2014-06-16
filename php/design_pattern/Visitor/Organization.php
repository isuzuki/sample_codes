<?php

require_once 'IAcceptor.php';
require_once 'IVisitor.php';

class Organization implements IAcceptor {

	private $entries = [];

	public function entry($name) {
		$this->entries[] = $name;
	}

	public function getEntries() {
		return $this->entries;
	}

	public function accept(IVisitor $visitor) {
		return $visitor->visit($this);
	}

}
