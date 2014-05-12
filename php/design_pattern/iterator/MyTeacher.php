<?php

require_once('Teacher.php');
require_once('Student.php');
require_once('StudentList.php');

class MyTeacher extends Teacher {

	protected $student_list;

	public function create_student_list() {
		$student_list = new StudentList();
		$student_list->add(new Student('hogeee', 1));
		$student_list->add(new Student('fugaaa', 2));

		$this->student_list = $student_list;
	}

	public function call_students() {
		$last = $this->student_list->get_last_num();
		for ($i = 0; $i < $last; $i++) {
			var_dump($this->student_list->get_student_at($i)->get_name());
		}
	}
}
