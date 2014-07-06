#include <stdio.h>
#include <stdlib.h>

void swap(int *x, int *y) {
	int tmp;

	tmp = *x;

	*x = *y;
	*y = tmp;
}

int main() {
	int x = 5, y = 7;

	printf("x : %d, y: %d\n", x, y);

	swap(&x, &y);
	printf("x : %d, y: %d\n", x, y);

	return EXIT_SUCCESS;
}
