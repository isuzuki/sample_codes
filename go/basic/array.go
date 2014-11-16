package main

import "fmt"

func main() {
	var arr1 [4]string

	arr1[0] = "a"
	arr1[1] = "b"
	arr1[2] = "c"
	arr1[3] = "d"
	fmt.Println(arr1)
	fmt.Println(arr1[0])

	// 宣言と同時に初期化
	arr2 := [...]string{"a", "b", "c", "d"}
	fmt.Println(arr2)
}
