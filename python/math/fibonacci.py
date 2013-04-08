#! /usr/bin/python
# coding: utf-8

if __name__ == "__main__":
	import sys

	argv = sys.argv
	n = argv[1]

	f0 = 0
	f1 = 1

	for i in xrange(1, int(n)):
		fib = f1 + f0
		f0 = f1
		f1 = fib
		
	print fib
