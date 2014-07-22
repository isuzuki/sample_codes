# coding: UTF-8

def sequence(start, end, step = 1):
    for i in range(start, end, step):
        yield i

for i in sequence(1, 100, 2):
    print i
