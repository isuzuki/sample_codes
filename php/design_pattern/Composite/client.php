<?php

require_once 'Team.php';
require_once 'Member.php';

$team = new Team('hoge');
$team->add(new Member('foo'));
$team->add(new Member('bar'));

$team->dump();

$sub_team = new Team('sub_hoge');
$sub_team->add(new Member('sub_foo'));
$sub_team->add(new Member('sub_bar'));
$sub_team->add(new Member('sub_baz'));
$team->add($sub_team);

$team->dump();

$sub_sub_team = new Team('sub_sub_hoge');
$sub_sub_team->add(new Member('sub_sub_foo'));
$sub_sub_team->add(new Member('sub_sub_bar'));
$sub_sub_team->add(new Member('sub_sub_baz'));
$sub_team->add($sub_sub_team);

$team->dump();
