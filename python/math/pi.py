#! /usr/bin/python
# coding: utf-8

# 元ソース
# http://handasse.blogspot.com/2011/12/1.html

def arctan(m):
	# 100桁分
	c = 10 ** 100

	a = b = c / m
	m2 = m * m
	s = k = 1
	while c:
		b /= m2
		k += 2
		c = b / k
		s = -s
		a += c * s

	return a

if __name__ == "__main__":
	# マチンの公式
	pi = str((4 * arctan(5) - arctan(239)) * 4)
	print pi[0] + "." + pi[1:]

