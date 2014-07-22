# coding: UTF-8

def fibonacci():
    (x, y) = (0, 1)
    while (True):
        yield x
        (x, y) = (y, x + y)

for i in fibonacci():
    if (10000 < i):
        break

    print i
