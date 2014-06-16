<?php

require_once 'ShellScript.php';
require_once 'FileSystem.php';
require_once 'MakeDirectoryCommand.php';
require_once 'RemoveDirectoryCommand.php';

$sh = new ShellScript();
$fs = new FileSystem('/tmp/test');

$sh->add(new MakeDirectoryCommand($fs));
$sh->add(new RemoveDirectoryCommand($fs));
$sh->run();
