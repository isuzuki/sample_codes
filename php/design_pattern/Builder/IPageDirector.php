<?php

require_once 'IPageBuilder.php';

interface IPageDirector {
	public function __construct(IPageBuilder $builder);
	public function buildPage();
	public function getPage();
}
