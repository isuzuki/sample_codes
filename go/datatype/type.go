package main

type Id int
type Priority int

func ProcessTask(id Id, priority Priority) {
}

func main() {
	var id Id = 3
	var priority Priority = 10

	ProcessTask(id, priority)
	// 独自定義した型じゃないのでコンパイルエラー
	// ProcessTask(priority, id)
}
