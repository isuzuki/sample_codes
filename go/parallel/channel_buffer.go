package main

import (
	"fmt"
	"log"
	"net/http"
)

// サイズがゼロの構造体
var empty struct{}

func getStatus(urlList []string) <-chan string {
	statusChan := make(chan string, 3)
	// バッファを5に指定して生成
	limit := make(chan struct{}, 5)

	go func() {
		for _, url := range urlList {
			select {
			case limit <- empty:
				// limitに書き込み可能な時は取得処理を実行
				go func(url string) {
					// このゴルーチンは同時に5つまで起動
					res, err := http.Get(url)
					if err != nil {
						log.Fatal(err)
					}

					statusChan <- res.Status
					defer res.Body.Close()

					// 終わったら一つ読み出して空きを作る
					<-limit
				}(url)
			}
		}
	}()

	return statusChan
}

func main() {
	urlList := []string{
		"http://www.yahoo.co.jp",
		"http://www.google.co.jp",
		"http://www.amazon.co.jp",
	}

	statusChan := getStatus(urlList)

	for i := 0; i < len(urlList); i++ {
		fmt.Println(<-statusChan)
	}
}
