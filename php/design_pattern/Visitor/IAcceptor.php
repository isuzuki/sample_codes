<?php

require_once 'IVisitor.php';

interface IAcceptor {

	public function accept(IVisitor $visitor);

}
