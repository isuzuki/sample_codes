package main

/*
#include <stdio.h>
#include <stdlib.h>

void hello(char *str) {
	printf("Hello cgo: %s\n", str);
}

int add(int a, int b) {
	return a + b;
}

*/
import "C" // この行をC言語のコメントアウト直後に書かないとエラーになる
import (
	"unsafe"
	"fmt"
)

func main() {
	str := C.CString("foo")
	defer C.free(unsafe.Pointer(str))

	C.hello(str)

	num := C.add(10, 20)
	fmt.Println(num)
}
