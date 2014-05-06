<?php
/**
 * イテレーターの勉強
 * 参考URL : http://d.hatena.ne.jp/hnw/20090523
 */

// ファイルを扱う
$inputs = new SplFileObject(__FILE__, 'r');
foreach ($inputs as $line) {
	echo $line;
}

// foreachの最初でrewindしない
$inputs = new NoRewindIterator(new SplFileObject('php://stdin'));
foreach ($inputs as $line) {
	echo $line;
}

// イテレーターを結合
$inputs = new AppendIterator();
$inputs->append(new SplFileObject('example1.txt', 'r'));
$inputs->append(new SplFileObject('example2.txt', 'r'));
foreach ($inputs as $line) {
	echo $line;
}

// 正規表現マッチ
$inputs = new AppendIterator();
$inputs->append(new SplFileObject('example1.txt', 'r'));
$inputs->append(new SplFileObject('example2.txt', 'r'));
$filter_inputs = new RegexIterator($inputs, '/^a+/');
foreach ($filter_inputs as $line) {
	echo $line;
}
