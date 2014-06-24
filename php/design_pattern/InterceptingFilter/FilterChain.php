<?php

require_once 'IFilter.php';

class FilterChain {

	private $filters = [];
	private $string;

	public function add(IFilter $filter) {
		$this->filters[] = $filter;
	}

	public function filter() {
		$string = $this->string;
		foreach ($this->filters as $filter) {
			$string = $filter->filter($string);
		}

		return $string;
	}

	public function setTarget($string) {
		$this->string = $string;
	}

}
