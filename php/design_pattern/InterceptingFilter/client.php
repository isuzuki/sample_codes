<?php

require_once 'FilterManager.php';
require_once 'TrimFilter.php';
require_once 'HogeFilter.php';
require_once 'FugaFilter.php';

$filtered_string = (new FilterManager('HogeFUGAAAAA '))
->setFilter(new HogeFilter())
->setFilter(new FugaFilter())
->setFilter(new TrimFilter())
->filter();

var_dump($filtered_string);
