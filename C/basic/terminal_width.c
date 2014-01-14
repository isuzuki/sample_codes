#include <stdio.h>
#include <unistd.h>

#include <sys/ioctl.h>

/**
 * isatty 参考URL : http://www.fireproject.jp/feature/c-language/term/termcheck.html
 */
int main(void) {

	struct winsize win;

	if (isatty(STDOUT_FILENO)) {
		ioctl(STDOUT_FILENO, TIOCGWINSZ, &win);

		printf("%d\n", win.ws_row);
		printf("%d\n", win.ws_col);
	}

	return 0;
}
