package main

import (
	"fmt"
)

func main() {
	s := make([]int, 0)
	fmt.Printf("Slice(%02d) : %p %v (%v)\n", 0, s, s, cap(s))
	for num := 1; num <= 17; num++ {
		s = append(s, num)
		fmt.Printf("Slice(%02d) : %p %v (%v)\n", num, s, s, cap(s))
	}
}
