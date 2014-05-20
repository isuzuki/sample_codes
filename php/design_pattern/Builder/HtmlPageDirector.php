<?php

require_once 'IPageDirector.php';
require_once 'IPageBuilder.php';

class HtmlPageDirector implements IPageDirector {

	private $builder = null;

	public function __construct(IPageBuilder $builder) {
		$this->builder = $builder;
	}

	public function buildPage() {
		$this->builder->setTitle('testttttt');
		$this->builder->setHeading('headddddd');
		$this->builder->setText('builderrrrr');
		$this->builder->format();
	}

	public function getPage() {
		return $this->builder->getPage();
	}

}
