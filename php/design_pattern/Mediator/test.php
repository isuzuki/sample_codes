<?php

require_once 'User.php';
require_once 'Chatroom.php';

$user1 = new User('hoge');
$user2 = new User('fuga');

$chatroom = new Chatroom();
$chatroom->login($user1);
$chatroom->login($user2);

var_dump($user1->sendMessage('fuga', 'barrrrrrrrr'));
var_dump($user2->sendMessage('hoge', 'foooooooooo'));
