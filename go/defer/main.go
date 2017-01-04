package main

import (
	"os"
)

func doSomething() error {
	err := os.MkdirAll("newdir", 0755)
	if err != nil {
		return err
	}

	// 2. ディレクトリ削除
	defer os.RemoveAll("newdir")

	f, err := os.Create("newdir/newfile")
	if err != nil {
		return err
	}

	// 1. ファイルハンドラを閉じる
	defer f.Close()
	return nil
}

func main() {
	doSomething()
}
