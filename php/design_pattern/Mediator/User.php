<?php

require_once 'Chatroom.php';

class User {

	private $chatroom;
	private $name;

	public function __construct($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}

	public function setChatroom(Chatroom $chatroom) {
		$this->chatroom = $chatroom;
	}

	public function getChatroom() {
		return $this->chatroom;
	}

	public function sendMessage($to, $message) {
		return $this->chatroom->sendMessage($this->getName(), $to, $message);
	}

	public function receiveMessage($from, $message) {
		return sprintf('to %s from %s : %s', $this->getName(), $from, $message);
	}

}
