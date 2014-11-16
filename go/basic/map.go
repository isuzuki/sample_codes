package main

import "fmt"

func main() {
	// var month map[int]string = map[int]string{}
	month := map[int]string{
		1: "January",
		2: "February",
	}
	fmt.Println(month)

	jan, ok := month[1]
	if ok {
		// データがある場合
		fmt.Println(jan)
	}

	for key, value := range month {
		fmt.Printf("%d %s\n", key, value)
	}

	delete(month, 1)
	fmt.Println(month)
}
