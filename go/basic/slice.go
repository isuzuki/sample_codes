package main

import "fmt"

func sum(nums ...int) (result int) {
	for _, n := range nums {
		result += n
	}

	return
}

func main() {
	// var s1 []string
	s1 := []string{"a", "b", "c"} // 上記と同一

	fmt.Println(s1[0])
	fmt.Println(s1)

	s1 = append(s1, "d")
	fmt.Println(s1)

	s2 := []string{"x", "y", "z"}
	s1 = append(s1, s2...)
	fmt.Println(s1)

	for i, s3 := range s2 {
		fmt.Println(i, s3)
	}

	fmt.Println(s2[1:len(s2)])

	fmt.Println(sum(1, 2, 3, 4))
}
