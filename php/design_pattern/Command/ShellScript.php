<?php

class ShellScript {

	private $queue = [];
	private $position = 0;

	public function add($command) {
		$this->queue[] = $command;
	}

	public function run() {
		foreach ($this->queue as $q) {
			$q->exec();
		}
	}

}
