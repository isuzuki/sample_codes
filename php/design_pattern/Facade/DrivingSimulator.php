<?php

require_once 'Car.php';
require_once 'Driver.php';

class DrivingSimulator {

	public function simulate() {
		$car = new Car();
		$driver = new Driver($car);
		$driver->pushPedal(80);
		$driver->drive(10);

		return $car->getDistance();
	}

}
