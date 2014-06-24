<?php

require_once 'DataReader.php';

class ExclaimDataReader extends DataReader {

	public function read() {
		return parent::read() . '!!!!';
	}
}
