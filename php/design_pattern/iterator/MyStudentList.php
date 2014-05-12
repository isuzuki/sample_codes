<?php

require_once('Student.php');
require_once('StudentList.php');
require_once('MyStudentListIterator.php');

class MyStudentList extends StudentList implements IteratorAggregate {

	public function getIterator() {
		return new MyStudentListIterator($this);
	}
}

$students = new MyStudentList();
$students->add(new Student('hogeeee', 1));
$students->add(new Student('fugaaaa', 2));

foreach ($students as $student) {
	var_dump($student->get_name());
}
