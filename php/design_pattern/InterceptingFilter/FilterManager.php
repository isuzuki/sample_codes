<?php

require_once 'FilterChain.php';
require_once 'IFilter.php';

class FilterManager {

	private $filter_chain;

	public function __construct($string) {
		$this->filter_chain = new FilterChain();
		$this->filter_chain->setTarget($string);
	}

	public function setFilter(IFilter $filter) {
		$this->filter_chain->add($filter);
		return $this;
	}

	public function filter() {
		return $this->filter_chain->filter();
	}
}
