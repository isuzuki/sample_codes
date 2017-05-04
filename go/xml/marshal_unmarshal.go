package main

import (
	"encoding/xml"
	"fmt"
)

type Name struct {
	First, Last string
}

type Person struct {
	Name   Name
	Gender string
	Age    int
}

func main() {
	// for example Marshal
	john := Person{Name{"John", "Doe"}, "Male", 20}
	buf, _ := xml.MarshalIndent(john, "", " ")
	fmt.Println(string(buf))

	// for example UnMarshal
	xmldoc := []byte(`
	<Person>
	  <Name>
	    <First>John</First>
	    <Last>Doe</Last>
	  </Name>
	  <Gender>Male</Gender>
	  <Age>20</Age>
	</Person>`)
	p := Person{}
	xml.Unmarshal(xmldoc, &p)
	fmt.Println(p)
}
