<?php // CareTaker

require_once 'ArticleMemento.php';

class ArticleCareTaker {

	private $memento = null;

	public function getMemento() {
		return $this->memento;
	}

	public function setMemento(ArticleMemento $memento) {
		$this->memento = $memento;
	}

}
