package main

import (
	"errors"
	"fmt"
	"log"
)

func main() {
	defer func() {
		err := recover()
		if err != nil {
			// runtime error: index out of range
			log.Fatal(err)
		}
	}()

	nums := []int{1, 2, 3}
	fmt.Println(nums[5])

	for i := 0; i < 10; i++ {
		if i > len(nums) {
			panic(errors.New("index out of range"))
		}

		fmt.Println(nums[i])
	}
}
