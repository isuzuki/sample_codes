<?php

class StudentList {
	protected $students = array();
	protected $last = 0;

	public function add(Student $student) {
		$this->students[$this->last] = $student;
		$this->last++;
	}

	public function get_student_at($index) {
		return $this->students[$index];
	}

	public function get_last_num() {
		return $this->last;
	}
}
