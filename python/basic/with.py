#! /usr/bin/python
# coding: UTF-8

# 参考 http://qiita.com/howmuch/items/95efab2e61f735a150e3

# with使用
with open('text1.txt', 'w') as text:
    text.write('Hello World')

# with不使用
text = None
try:
    text = open('text2.txt', 'w')
    try:
        text.write('Hello World')
    except:
        raise
finally:
    if text:
        text.close()
