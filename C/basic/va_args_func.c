#include <stdio.h>
#include <stdlib.h>
#include <stdarg.h>

/**
 可変長引数のサンプル
  参考URL : http://www.geocities.jp/ky_webid/ProgrammingPlacePlus/c/052.html
 */

int sum(int num, ...);

int main() {
	printf("%d\n", sum(5, 1, 2, 3, 4, 5));

	return EXIT_SUCCESS;
}

int sum(int num, ...) {
	int total = 0;
	int i;
	va_list args;

	va_start(args, num);

	for (i = 0; i < num; i++) {
		total += va_arg(args, int);
	}

	va_end(args);
	return total;
}
