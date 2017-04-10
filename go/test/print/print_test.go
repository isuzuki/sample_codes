package MyPrint

import (
	"bytes"
	"testing"
)

func TestPrint(t *testing.T) {
	buf := &bytes.Buffer{}
	testPrint(buf)
	ostr := buf.String()

	cstr := "Hello World"
	if cstr != ostr {
		t.Errorf("output string should be %s but %s", cstr, ostr)
		t.FailNow()
	}
}
