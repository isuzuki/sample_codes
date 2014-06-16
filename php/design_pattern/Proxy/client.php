<?php

require_once 'Proxy.php';
require_once 'RealSubject1.php';
require_once 'RealSubject2.php';

$proxy1 = new Proxy(new RealSubject1());
$proxy2 = new Proxy(new RealSubject2());

$proxy1->doMethod1();
$proxy1->doMethod2();
$proxy1->doMethod3();

$proxy2->doMethod1();
$proxy2->doMethod2();
$proxy2->doMethod3();

