package main

import (
	"fmt"
	"math"
	"time"
)

func main() {
	var max int = 100

	// 素数のリスト
	primes := make([]int, 1)
	primes[0] = 2 // 最小の素数

	start := time.Now()

	// 3以上の奇数のみを判定対象とする
	for n := 3; n < max; n += 2 {
		flag := true
		f := float64(n)
		// 対象以下の素数でチェックする
		for i := 1; i < len(primes); i++ {
			// √n以下の素数までチェックする
			if float64(primes[i]) > math.Sqrt(f) {
				break

			// 割り切れる素数のチェック
			} else if (n % primes[i]) == 0 {
				flag = false
				break
			}
		}

		if flag {
			primes = append(primes, n)
		}
	}

	end := time.Now()

	// 実行時間を表示
	fmt.Printf("%v 以下の素数: %v\n", max, primes)
	fmt.Printf("%v 経過", end.Sub(start))
}
