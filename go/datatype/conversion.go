package main

import "fmt"

func Print(value interface{}) {
	s, ok := value.(string) // Type Assertion
	if ok {
		fmt.Printf("value is string: %s\n", s)
	} else {
		fmt.Printf("value is not string\n")
	}
}

func TypePrint(value interface{}) {
	switch v := value.(type) {
	case string:
		fmt.Printf("value is string: %s\n", v)
	case int:
		fmt.Printf("value is int: %d\n", v)
	}
}

func main() {
	// キャスト
	var i uint8 = 3
	var j uint32 = uint32(i)
	fmt.Println(j)

	var s string = "abc"
	var b []byte = []byte(s)
	fmt.Println(b)

	Print("abc")
	Print(10)

	TypePrint("abc")
	TypePrint(10)
}
