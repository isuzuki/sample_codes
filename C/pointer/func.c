#include <stdio.h>
#include <stdlib.h>

void hoge() {
	printf("hoge\n");
}

void fuga() {
	printf("fuga\n");
}

void piyo() {
	printf("piyo\n");
}

int main() {

	void (*po[])() = {hoge, fuga, piyo};
	po[1]();

	return EXIT_SUCCESS;
}
