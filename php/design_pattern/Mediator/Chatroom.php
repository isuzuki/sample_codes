<?php

require_once 'User.php';

class Chatroom {

	private $users = [];

	public function login(User $user) {
		$user->setChatroom($this);
		if (isset($this->users[$user->getName()]) === FALSE) {
			$this->users[$user->getName()] = $user;
		}
	}

	public function sendMessage($from, $to, $message) {
		if (isset($this->users[$to]) === FALSE) {
			throw new Exception('送信相手が存在しません');
		}

		return $this->users[$to]->receiveMessage($from, $message);
	}

}
