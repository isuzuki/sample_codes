<?php
/**
 * PsySH sample
 * @see http://cho-phper.hateblo.jp/entry/2015/11/10/031000
 */

namespace Isuzuki;

echo __NAMESPACE__ . " shell\n";

$sh = new \Psy\Shell();

// set namespace starting project
$sh->addCode(sprintf('namespace %s;', __NAMESPACE__));

$sh->run();

echo "Bye.\n";
