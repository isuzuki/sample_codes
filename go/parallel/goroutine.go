package main

import (
	"fmt"
	"log"
	"net/http"
	"sync"
)

func main() {
	wait := new(sync.WaitGroup)
	urlList := []string{
		"http://www.yahoo.co.jp",
		"http://www.google.co.jp",
		"http://www.amazon.co.jp",
	}

	for _, url := range urlList {
		// waitGroupに追加
		wait.Add(1)

		// 取得処理をゴルーチンで実行
		go func(url string) {
			res, err := http.Get(url)
			if err != nil {
				log.Fatal(err)
			}

			defer res.Body.Close()
			fmt.Println(url, res.Status)

			// waitGroupから削除
			wait.Done()
		}(url)
	}

	// 待ち合わせ
	wait.Wait()
}
