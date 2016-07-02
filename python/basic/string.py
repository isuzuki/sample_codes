#! /usr/bin/env python
# coding: utf-8

string = 'hogehoge'

print string.find('hoge')
print string.find('fuga')

try:
    string.index('hoge')
except:
    print 'no index'

try:
    string.index('fuga')
except:
    print 'no index'

print string.count('hoge')
print string.count('fuga')
