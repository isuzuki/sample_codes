<?php

class MyStudentListIterator implements Iterator {

	protected $students = array();
	protected $index = 0;

	public function __construct(StudentList $students) {
		$this->students = $students;
	}

	public function rewind() {
		$this->index = 0;
	}

	public function current() {
		return $this->students->get_student_at($this->index);
	}

	public function next() {
		$this->index++;
	}

	public function key() {
		return $this->index;
	}

	public function valid() {
		return $this->students->get_student_at($this->index);
	}
}
