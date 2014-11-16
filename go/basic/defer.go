package main

import (
	"fmt"
	"os"
)

func main() {
	file, err := os.Open("./error.go")
	if err != nil {
		fmt.Println("file open error")
		return
	}

	defer file.Close()
}
