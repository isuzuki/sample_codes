<?php

require_once 'ISubject.php';

class Radio implements ISubject {

	private $list = [];
	private $music_list = [];

	public function add(IObserver $observer) {
		$this->list[] = $observer;
	}

	public function notify($e) {
		foreach ($this->list as $obj) {
			$obj->receive($e);
		}
	}

	public function broadCast($music) {
		$this->music_list[] = $music;
		$this->notify($music);
	}

	public function talk() {
		$this->notify('DJ talk');
	}

}
