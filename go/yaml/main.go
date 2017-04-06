package main

import (
	"fmt"
	"gopkg.in/yaml.v2"
	"io/ioutil"
)

type Data struct {
	UserId      int    `yaml:"user_id"`
	UserName    string `yaml:"user_name"`
	Follownum   int    `yaml:"follow_num"`
	MessageText string `yaml:"message_text"`
	InvalidData string `yaml:"invalid_data"`
}

func main() {
	buf, err := ioutil.ReadFile("user.yml")
	if err != nil {
		panic(err)
	}

	var d Data
	err = yaml.Unmarshal(buf, &d)
	fmt.Println(d)
}
