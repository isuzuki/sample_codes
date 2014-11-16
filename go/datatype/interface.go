package main

import (
	"fmt"
)

type Id int
type Detail string

type Task struct {
	id     Id
	detail Detail
	done   bool
}

type Stringer interface {
	String() string
}

func (task Task) String() string {
	str := fmt.Sprintf("%d) %s", task.id, task.detail)
	return str
}

func Print(stringer Stringer) {
	fmt.Println(stringer.String())
}

// どんな型でも受け取れる
func Do(e interface{}) {
}

func main() {
	var task Task = Task{
		id:     1,
		detail: "task no1",
	}

	Print(task)

	Do(123)
	Do("string")
	Do(true)
}
