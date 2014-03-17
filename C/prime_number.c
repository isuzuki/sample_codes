#include <stdio.h>
#include <stdlib.h>

int main(void) {
	// 素数とは1と自身の値以外では割り切れない数
	int i, j, num;
	int total = 0;
	printf("%s\n", "入力した数字以下の素数の数を出します");
	scanf("%d", &num);

	// 入力値チェック
	if (num <= 1) {
		printf("%s%d\n", "素数合計は", total);
		return EXIT_SUCCESS;
	}

	total++;

	// 2以外の偶数は素数ではないので奇数のみ調べる
	for (i = 3; i <= num; i++) {
		for (j = 3; j <= i; j += 2) {
			if (i % j == 0) {
				if (i != j) {
					break;
				}
				total++;
			}
		}
	}

	printf("%s%d\n", "素数合計は", total);
	return EXIT_SUCCESS;
}
