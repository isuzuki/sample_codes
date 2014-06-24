<?php

require_once 'IFilter.php';

class FugaFilter implements IFilter {

	public function filter($string) {
		return str_ireplace('fuga', '', $string);
	}

}
