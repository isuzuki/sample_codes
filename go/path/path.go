package main

import (
	"io"
	"log"
	"net/http"
	"os"
	"path"
	"path/filepath"
)

func main() {
	cwd, err := os.Getwd()
	if err != nil {
		log.Fatal(err)
	}

	http.HandleFunc("/", func(w http.ResponseWriter, r *http.Request) {
		// httpリクエストは論理パスなので、pathパッケージを利用
		if ok, err := path.Match("/data/*.html", r.URL.Path); err != nil || !ok {
			http.NotFound(w, r)
			return
		}

		// 物理パスとして扱うので、path/filepathパッケージを利用
		name := filepath.Join(cwd, "data", filepath.Base(r.URL.Path))
		f, err := os.Open(name)
		if err != nil {
			http.NotFound(w, r)
			return
		}

		defer f.Close()
		io.Copy(w, f)
	})

	http.ListenAndServe(":8080", nil)
}
