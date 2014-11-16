package main

import "fmt"

type Task struct {
	Id     int
	Detail string
	done   bool
}

// 構造体のコンストラクタの代わり
func NewTask(id int, detail string) *Task {
	task := &Task{
		Id:     id,
		Detail: detail,
		done:   false,
	}

	return task
}

func (task Task) String() string {
	str := fmt.Sprintf("%d) %s", task.Id, task.Detail)
	return str
}

func Finish(task *Task) {
	task.done = true
}

func main() {
	var task Task = Task{
		Id:     1,
		Detail: "task no1",
		done:   false,
	}

	fmt.Println(task.Id)
	fmt.Println(task.Detail)
	fmt.Println(task.done)

	Finish(&task)
	fmt.Println(task.done)

	task2 := NewTask(2, "task no2")
	fmt.Printf("%s", task2)
}
