<?php

require_once 'IFilter.php';

class HogeFilter implements IFilter {

	public function filter($string) {
		return str_ireplace('hoge', '', $string);
	}

}
