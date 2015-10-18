<?php

require_once 'Users.php';

$users = new Users();

$users['key1'] = 'user1';
$users['key2'] = 'user2';
$users['key10'] = 'user10';

var_dump($users);
var_dump($users['key2']);
var_dump($users['key3']);
isset($users['key4']);

unset($users['key1']);
var_dump($users);

foreach ($users as $key => $value) {
    var_dump($key .':'. $value);
}
