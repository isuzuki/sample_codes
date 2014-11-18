#include "capsule.h"
#include <stdio.h>

int main(void) {
	User user = NULL;

	user = UserCreate(11, "hogeee");
	if (!user) {
		return 1;
	}

	UserPrint(user);
	UserSetName(user, "fugaaa");

	// incomplete definition of typeエラーが出る
	// user->name;

	UserPrint(user);
	UserDelete(user);

	return 0;
}
