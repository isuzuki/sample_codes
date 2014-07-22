# coding: UTF-8

def fizzbuzz():
    n = 0
    while (True):
        n += 1
        fizz = n % 3 == 0
        buzz = n % 5 == 0
        if (fizz and buzz):
            yield [n, "fizzbuzz"]
        elif (fizz):
            yield [n, "fizz"]
        elif (buzz):
            yield [n, "buzz"]

for [i, result] in fizzbuzz():
    if (i > 100):
        break

    print str(i) + ":" + result
