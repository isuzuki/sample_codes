package main

import "fmt"

func main() {

	var n int = 0
	for {
		n++
		if n > 10 {
			break // ループ抜ける
		} else if n%2 == 0 {
			continue
		}
		fmt.Println(n)
	}

	// goにはwhileが無い
	// 無限ループ
	//	for {
	//		fmt.Println("loop")
	//	}
}
