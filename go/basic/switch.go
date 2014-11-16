package main

import "fmt"

func main() {
	var n int = 5

	// breakを書かなくても処理が終わる
	switch n {
	case 5:
		fmt.Println("case 5")
		fallthrough // 次のcaseに進める
	case 4:
		fmt.Println("case 4")
	case 3:
		fmt.Println("case 3")
	}
}
