package main

import (
	f "fmt"     // パッケージ名のalias
	_ "math"    // 使用していないパッケージ
	. "strings" // パッケージ名を省略
)

func main() {
	f.Println("Hello World")
	f.Println(ToUpper("string upper"))
}
