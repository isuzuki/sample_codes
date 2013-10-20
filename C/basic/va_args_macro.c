#include <stdio.h>
#include <stdlib.h>

#define DPRINTF(s, ...)    printf("%s:%d: " s, __func__, __LINE__, __VA_ARGS__)

int main() {
	DPRINTF("%s %s\n", "log1", "log2");

	DPRINTF("%s %s\n", "log3", "log4");

	return EXIT_SUCCESS;
}
