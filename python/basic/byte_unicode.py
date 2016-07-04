#! /usr/bin/env python
# coding: utf-8

import sys

string = 'python'
print len(string)
print string[1]

# byte string
string = 'パイソン'
print type(string)
print string
print [string]
print len(string)
print string[1]

# unicode string
string = u'パイソン'
print type(string)
print string
print [string]
print len(string)
print string[1]

# unicode to byte string
string = u'パイソン'
encoded = string.encode(sys.stdin.encoding)
print type(encoded)
print encoded

# byte to unicode string
string = 'パイソン'
decoded = string.decode(sys.stdin.encoding)
print type(decoded)
print decoded
