package main

import (
	"encoding/csv"
	"fmt"
	"os"
)

type Item struct {
	Title string
	Price int
}

func main() {
	var items []Item
	item1 := Item{"商品1", 1000}
	item2 := Item{"商品2", 2000}

	items = append(items, item1, item2)

	fp, err := os.Create("items.csv")
	if err != nil {
		panic(err)
	}
	defer fp.Close()

	writer := csv.NewWriter(fp)

	for i := 0; i < len(items); i++ {
		var fields []string
		fields = append(fields, items[i].Title)
		fields = append(fields, fmt.Sprint(items[i].Price))

		writer.Write(fields)
	}

	writer.Flush()
}
