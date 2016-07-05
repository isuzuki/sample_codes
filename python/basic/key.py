#! /usr/bin/env/python
# coding: utf-8

test = {}
# KeyErrorを回避
if 'a' in test:
    print test['a']
else:
    print 'not exists'

# keyがあれば、keyに対応した値、無ければdefault値を返す
print test.get('a')

try:
    print test['a']
except KeyError:
    print 'catch KeyError'
