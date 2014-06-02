<?php

require_once 'StrategyString.php';

var_dump((new StrategyString('u'))->getString('abCdE'));
var_dump((new StrategyString('l'))->getString('abCdE'));
var_dump((new StrategyString('e'))->getString('abCdE'));
