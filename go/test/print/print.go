package MyPrint

import (
	"fmt"
	"io"
	"os"
)

func testPrint(w io.Writer) {
	fmt.Fprint(w, "Hello World")
}

func main() {
	testPrint(os.Stdout)
}
