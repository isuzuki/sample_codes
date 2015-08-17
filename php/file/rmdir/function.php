<?php

/**
 * 標準関数を利用してのディレクトリ削除
 */

deleteDirectory('hoge');

function deleteDirectory($dir)
{
	if (!$dh = @opendir($dir)) {
		return false;
	}

	while ($item = readdir($dh)) {
		if ($item == '.' || $item == '..') {
			continue;
		}

		$file = sprintf('%s/%s', $dir, $item);
		if (is_dir($file) && !is_link($file)) {
			deleteDirectory($file);
		} else {
			unlink($file);
		}
	}

	closedir($dh);
	rmdir($dir);
}
