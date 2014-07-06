#include <stdio.h>
#include <stdlib.h>

void hello() {
	printf("Hello World\n");
}

int main() {
	void (*po)() = hello;
	po();

	return EXIT_SUCCESS;
}
