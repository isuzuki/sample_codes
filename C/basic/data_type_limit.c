#include <stdio.h>
#include <limits.h>

int main(void) {
	printf("int 最大:%d\n", INT_MAX);
	printf("int 最小:%d\n", INT_MIN);
	printf("unsigned int 最大:%d\n", UINT_MAX);

	printf("long 最大:%ld\n", LONG_MAX);
	printf("long 最小:%ld\n", LONG_MIN);
	printf("unsigned long 最大:%lu\n", ULONG_MAX);

	printf("short 最大:%d\n", SHRT_MAX);
	printf("short 最小:%d\n", SHRT_MIN);
	printf("unsigned short 最大:%d\n", USHRT_MAX);

	printf("char 最大:%u\n", CHAR_MAX);
	printf("char 最小:%d\n", CHAR_MIN);
	printf("unsigned char 最大:%u\n", UCHAR_MAX);
}
