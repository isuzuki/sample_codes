<?php

require_once 'Car.php';

class Driver {

	private $car;

	public function __construct(Car $car) {
		$this->car = $car;
	}

	public function pushPedal($speed) {
		$this->car->setSpeed($speed);
	}

	public function drive($minutes) {
		$this->car->run($minutes);
	}

}
