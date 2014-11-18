#include "capsule.h"
#include <stdlib.h>
#include <stdio.h>

// 状態管理構造体
struct User {
	int id;
	char* name;
};

User UserCreate(int id, char* name) {
	User user = malloc(sizeof(struct User));
	if (!user) {
		return NULL;
	}

	user->id = id;
	user->name = name;

	return user;
}

void UserDelete(User user) {
	free(user);
}

int UserGetId(User user) {
	return user->id;
}

char* UserGetName(User user) {
	return user->name;
}

void UserSetName(User user, char* name) {
	user->name = name;
}

void UserPrint(User user) {
	printf("id : %d, name %s\n", user->id, user->name);
}
