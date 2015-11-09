package main

import "fmt"

type Accessor interface {
	GetText() string
}

func Say(acsr Accessor) {
	fmt.Println(acsr.GetText())
}

type Dog struct {
	name string
}

func (self *Dog) GetText() string {
	return self.name + "bow"
}

type Cat struct {
	name string
}

func (self *Cat) GetText() string {
	return self.name + "meow"
}

func main() {
	dog := Dog{"ポチ"}
	Say(&dog)

	cat := Cat{"ミケ"}
	Say(&cat)
}
