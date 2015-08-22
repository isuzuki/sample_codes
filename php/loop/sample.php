<?php
/**
 * ループサンプル
 * 参考URL : http://blog.tojiru.net/article/404452786.html
 */



/**
 * forとインクリメント
 */
for ($i = 1; $i <= 100; $i++) {
	echo $i .PHP_EOL;
}

for ($i = 1; $i <= 100; print $i++ .PHP_EOL);



/**
 * range
 */
foreach (range(1, 100) as $i) {
	echo $i .PHP_EOL;
}



/**
 * iterator
 */
class NaturalNumberIterator implements Iterator
{
	protected $i = 1;

	public function current() { return $this->i; }
	public function key() { return $this->i; }
	public function next() { $this->i++; }
	public function rewind() { $this->i = 1; }
	public function valid() { return true; }
}

$iterator = new NaturalNumberIterator();
$iterator = new LimitIterator($iterator, 0, 100);

foreach ($iterator as $i) {
	echo $i .PHP_EOL;
}



/**
 * generator
 */
function naturalNumbers($i = 1) {
	for (;;) yield $i++;
}

$generator = naturalNumbers();
$generator = new LimitIterator($generator, 0, 100);

foreach ($generator as $i) {
	echo $i .PHP_EOL;
}
