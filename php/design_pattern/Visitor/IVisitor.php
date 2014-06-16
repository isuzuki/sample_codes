<?php

require_once 'IAcceptor.php';

interface IVisitor {

	public function visit(IAcceptor $acceptor);

}
