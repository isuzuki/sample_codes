<?php

class Car {

	private $speed;
	private $distance;

	public function setSpeed($speed) {
		$this->speed = $speed;
	}

	public function run($minutes) {
		$this->distance = $this->speed * $minutes;
	}

	public function getDistance() {
		return $this->distance;
	}

}
