#ifndef _CAPSULE_H_
#define _CAPSULE_H_

// 不完全型宣言
// 構造体のポインタのみを公開
typedef struct User *User;

User UserCreate(int id, char* name);
void UserDelete(User user);
int UserGetId(User user);
char* UserGetName(User user);
void UserSetName(User user, char* name);
void UserPrint(User user);

#endif /* _CAPSULE_H_ */
