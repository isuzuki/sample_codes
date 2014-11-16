package main

import "fmt"

type User struct {
	FirstName string
	LastName  string
}

func (user User) FullName() string {
	fullName := fmt.Sprintf("%s %s", user.FirstName, user.LastName)
	return fullName
}

func NewUser(firstName, lastName string) User {
	return User{
		FirstName: firstName,
		LastName:  lastName,
	}
}

type Task struct {
	Id     int
	Detail string
	done   bool
	User   // Userを埋め込む
}

func NewTask(id int, detail, firstName, lastName string) Task {
	task := Task{
		Id:     id,
		Detail: detail,
		done:   false,
		User:   NewUser(firstName, lastName),
	}
	return task
}

// interfaceの埋め込み
type Reader interface {
	Read(p []byte) (n int, err error)
}

type Writer interface {
	Write(p []byte) (n int, err error)
}

type ReadWriter interface {
	Reader
	Writer
}

func main() {
	user := NewUser("hoge", "fuga")
	fmt.Println(user.FullName())

	task := NewTask(1, "task no1", "first-piyo", "last-piyo")
	fmt.Println(task.FullName())
}
