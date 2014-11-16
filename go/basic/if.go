package main

import "fmt"

func main() {
	a, b := 10, 100
	if a > b {
		fmt.Println("a is larger than b")
	} else if a < b {
		fmt.Println("a is smaller than b")
	} else {
		fmt.Println("a is equal b")
	}

	// 条件が一つでも{}の省略は不可
	//	if a > b
	//	fmt.Println("a is larger than b")

	// 三項演算子は存在しない
	//	a > b ? fmt.Println("a is larger than b") : fmt.Println("a is smaller than b")
}
