#! coding: utf-8

def list_slice(list, n):
    slice_list = []
    for i in list:
        slice_list.append(i)
        if len(slice_list) == n:
            yield slice_list
            slice_list = []

    if slice_list != []:
        i = n - len(slice_list)
        while i != 0:
            slice_list.append(0)
            i -= 1

        yield slice_list


for nums in list_slice(range(1, 22), 4):
    print nums
