package main

/*
#include <stdio.h>
#include <stdlib.h>

char* GoVersion();

void go_version() {
	char *ver = GoVersion(); // GOの関数呼び出し
	printf("Go Version %s\n", ver);
	free(ver);
}

*/
import "C"

// exportが書いてあるファイルにはCの関数定義を書いたらエラーになる
func main() {
	C.go_version()
}
