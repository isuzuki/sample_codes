package main

import (
	"fmt"
	"net/http"
)

func handler(w http.ResponseWriter, r *http.Request) {
	fmt.Fprintf(w, "Hello net/http")
}

func main() {
	// ハンドラを登録して、ページを表示させる
	http.HandleFunc("/", handler)
	http.ListenAndServe(":8080", nil)
}
