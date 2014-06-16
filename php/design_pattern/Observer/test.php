<?php

require_once 'Radio.php';
require_once 'Listner.php';

$radio = new Radio();
$radio->add(new Listner('hoge'));
$radio->add(new Listner('fuga'));

$radio->notify('testttt');
$radio->talk();
$radio->broadCast('fooooo');
