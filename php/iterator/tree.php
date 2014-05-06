<?php namespace Tree;
/**
 * Iteratorのサンプル
 *  参考URL : http://blog.tojiru.net/article/247270280.html
 */

use RecursiveDirectoryIterator;

use RecursiveFilterIterator;

use RecursiveTreeIterator;

class DotFilter extends RecursiveFilterIterator {
	public function accept() {
		$file_name = $this->current()->getFilename();
		return $file_name[0] !== '.';
	}
}

$rti = new RecursiveTreeIterator(new DotFilter(new RecursiveDirectoryIterator('.')), RecursiveTreeIterator::BYPASS_CURRENT);
$rti->setPrefixPart(RecursiveTreeIterator::PREFIX_END_LAST, '`-');
$rti->setPrefixPart(RecursiveTreeIterator::PREFIX_RIGHT, '- ');

foreach ($rti as $file) {
	echo $rti->getPrefix();
	echo $file->getFilename();
	echo PHP_EOL;
}
