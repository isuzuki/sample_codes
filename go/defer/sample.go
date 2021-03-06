package main

import (
	"fmt"
)

func message() {
	defer func() {
		fmt.Println("End")
		err := recover()
		if err != nil {
			fmt.Println("Recover!:", err)
		}
	}()

	fmt.Println("Start")
	panic("Panic!")
}

func main() {
	message()
}
