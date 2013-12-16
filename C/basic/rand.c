#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(void) {
	int i, n;

	srand((unsigned)time(NULL));

	for (i = 0; i <= 10; i++) {
		n = rand() % 100 + 1;
		printf("%d:%d\n", i + 1, n);
	}

	return EXIT_SUCCESS;
}
