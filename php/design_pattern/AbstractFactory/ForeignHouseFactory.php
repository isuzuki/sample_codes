<?php

require_once 'IHouseFactory.php';

class ForeignHouseFactory implements IHouseFactory {

	public function createDoor() {
		return '木のドア';
	}

	public function createWindow() {
		return 'ガラスの窓';
	}
}
