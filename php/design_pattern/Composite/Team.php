<?php

require_once 'IOrganization.php';

class Team implements IOrganization {

	private $name;
	private $member = [];

	public function __construct($name) {
		$this->name = $name;
	}

	public function add(IOrganization $member) {
		$this->member[] = $member;
	}

	public function dump() {
		var_dump($this->name);
		foreach ($this->member as $member) {
			$member->dump();
		}
	}

}
