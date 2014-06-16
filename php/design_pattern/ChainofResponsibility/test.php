<?php

require_once 'DNS.php';

$dns1 = new DNS();
$dns1->setDict([
	'wiki' => '1.1.1.2',
	'blog' => '1.1.1.3',
]);

$dns2 = new DNS();
$dns2->setDict([
	'wiki' => '2.1.1.2',
	'blog' => '2.1.1.3',
]);

$dns3 = new DNS();
$dns3->setDict([
	'wiki' => '3.1.1.2',
	'blog' => '3.1.1.3',
])
->setNext('dns1', $dns1)
->setNext('dns2', $dns2);

$dns4 = new DNS();
$dns4->setNext('dns3', $dns3);

var_dump($dns4->query('blog.dns3'));
var_dump($dns4->query('wiki.dns1.dns3'));
var_dump($dns4->query('wiki.dns2.dns3'));
var_dump($dns4->query('wiki.dns3'));
