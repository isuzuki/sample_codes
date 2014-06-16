<?php

require_once 'IVisitor.php';
require_once 'IAcceptor.php';

class CountVisitor implements IVisitor {

	public function visit(IAcceptor $acceptor) {
		return count($acceptor->getEntries());
	}

}
