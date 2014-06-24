<?php

require_once 'IFilter.php';

class TrimFilter implements IFilter {

	public function filter($string) {
		return trim($string);
	}

}
