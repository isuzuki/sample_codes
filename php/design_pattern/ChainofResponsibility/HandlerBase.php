<?php

abstract class HandlerBase {

	private $next = [];
	private $dict = [];

	public function query($query) {
		$elms = preg_split('/\./', $query);
		$elm = array_pop($elms);

		if (!$elms) {
			return $this->dict[$elm];
		}

		return $this->getNext($elm)->query(join('.', $elms));
	}

	public function getNext($elm) {
		if (isset($this->next[$elm]) === FALSE) {
			throw new Exception('存在しません。');
		}

		return $this->next[$elm];
	}

	public function setNext($key, HandlerBase $obj) {
		$this->next[$key] = $obj;
		return $this;
	}

	public function setDict(array $dict) {
		$this->dict = $dict;
		return $this;
	}
}
