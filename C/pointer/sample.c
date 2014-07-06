#include <stdio.h>
#include <stdlib.h>

int main() {

	int x = 5;
	int *px;

	printf("%d\n", x);

	px = &x;
	*px = 15;
	printf("%d\n", x);

	return EXIT_SUCCESS;
}
