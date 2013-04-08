#! /usr/bin/python
# coding: utf-8

# 元ソース http://lupus.is.kochi-u.ac.jp/shiota/jsii07/L06c.html
# ネイピア数 e = 1 + 1/1! + 1/2! + 1/3! + 1/4! + ...

# 100桁分計算
p = 10 ** 100
q = 10 ** 10
x = p * q
s = x
n = 1
while x > 0:
	x /= n
	s += x
	n += 1

s = s / q
u = s / p
v = s - u * p

print "%d.%d" % (u, v)
