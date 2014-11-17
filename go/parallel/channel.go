package main

import (
	"fmt"
	"log"
	"net/http"
)

func getStatus(urlList []string) <-chan string {
	statusChan := make(chan string)
	for _, url := range urlList {
		go func(url string) {
			res, err := http.Get(url)
			if err != nil {
				log.Fatal(err)
			}

			defer res.Body.Close()
			statusChan <- res.Status
		}(url)
	}

	return statusChan
}

func main() {
	urlList := []string{
		"http://www.yahoo.co.jp",
		"http://www.google.co.jp",
		"http://www.amazon.co.jp",
	}

	statusChan := getStatus(urlList)

	// statusChanの読み出しが3回完了するまで処理がブロックされる
	for i := 0; i < len(urlList); i++ {
		fmt.Println(<-statusChan)
	}
}
