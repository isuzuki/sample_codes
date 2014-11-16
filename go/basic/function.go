package main

import "fmt"

func sum(x, y int) int {
	return x + y
}

func swap(x, y int) (int, int) {
	return y, x
}

func main() {
	n := sum(1, 5)
	fmt.Println(n)

	x, y := 3, 4
	// x = swap(x, y) // コンパイルエラーになる
	x, _ = swap(x, y) // 第二戻り値を無視
	x, y = swap(x, y)

	fmt.Println(x)

	// 無名関数
	func(i, j int) {
		fmt.Println(i + j)
	}(100, 50)
}
