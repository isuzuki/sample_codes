#! coding: utf-8

def toggle():
    while (True):
        yield "odd"
        yield "even"

i = 0
for x in toggle():
    if i > 10:
        break

    print str(i) +" : "+ x
    i += 1
