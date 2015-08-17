<?php

/**
 * FilesystemIteratorを利用してのディレクトリ削除
 */

deleteDirectory('hoge');

function deleteDirectory($dir)
{
	if (!is_dir($dir)) {
		return false;
	}

	$items = new FilesystemIterator($dir);
	foreach ($items as $item) {
		if ($item->isDir() && !$item->isLink()) {
			deleteDirectory($item->getPathname());
		} else {
			unlink($item->getPathname());
		}
	}

	rmdir($dir);
}
