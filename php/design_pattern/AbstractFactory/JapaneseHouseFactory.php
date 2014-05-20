<?php

require_once 'IHouseFactory.php';

class JapaneseHouseFactory implements IHouseFactory {

	public function createDoor() {
		return '木の門';
	}

	public function createWindow() {
		return '障子';
	}
}
