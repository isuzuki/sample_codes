<?php

$cidr = '127.0.0.0/24';
$remoteIp = '127.0.0.1';

list($allowIp, $mask) = explode('/', $cidr);

$allowLong = ip2long($allowIp) >> (32 - $mask);
$remoteLong = ip2long($remoteIp) >> (32 - $mask);

var_dump($allowLong == $remoteLong);
