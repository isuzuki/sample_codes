#include <stdio.h>

typedef struct {
	int id;
	char *name;
} user;

int main(void) {
	user u;
	u.id = 1;
	u.name = "user 1";

	printf("%d : %s", u.id, u.name);

	return 0;
}
