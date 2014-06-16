<?php

require_once 'IVisitor.php';
require_once 'IAcceptor.php';

class DumpVisitor implements IVisitor {

	public function visit(IAcceptor $acceptor) {
		var_dump($acceptor->getEntries());
	}

}
