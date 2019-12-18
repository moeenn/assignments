package main

import (
	"crypto/rand"
	"fmt"
)

func tokenGenerator() string {
	b := make([]byte, 32)
	rand.Read(b)
	return fmt.Sprintf("%x", b)
}

func main() {
	a := tokenGenerator()
	fmt.Println(a)
}
