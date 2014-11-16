package main

import (
	"errors"
	"fmt"
	"log"
)

func div(i, j int) (result int, err error) {
	if j == 0 {
		err = errors.New("divide by zero")
		return
	}

	result = i / j
	// 名前付き戻り値を宣言しているとreturnのあとに値を明示する必要がない
	return
}

func main() {
	n, err := div(10, 0)
	if err != nil {
		log.Fatal(err)
	}

	fmt.Println(n)
}
