package main

import (
	"encoding/xml"
	"fmt"
	"os"
)

type Data struct {
	Items []Item `xml:"Item"`
}

type Item struct {
	Title string `xml:"Title"`
	Price int    `xml:"Price"`
}

func main() {
	data := loadXml()

	for i := 0; i < len(data.Items); i++ {
		fmt.Printf("%s:%d\n", data.Items[i].Title, data.Items[i].Price)
	}
}

func loadXml() Data {
	fp, err := os.Open("items.xml")
	if err != nil {
		panic(err)
	}
	defer fp.Close()

	var data Data
	decoder := xml.NewDecoder(fp)
	err = decoder.Decode(&data)
	if err != nil {
		panic(err)
	}

	return data
}
