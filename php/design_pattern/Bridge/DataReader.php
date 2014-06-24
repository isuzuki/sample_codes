<?php

require_once 'IData.php';

class DataReader {

	private $data;

	public function __construct(IData $data) {
		$this->data = $data;
	}

	public function read() {
		return $this->data->read();
	}

	public function all() {
		return $this->data->all();
	}

}
