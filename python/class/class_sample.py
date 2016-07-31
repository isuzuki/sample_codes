#! /usr/bin/env python
# coding: utf-8

'''
class method, static method sample
'''

class ClassSample:
    name = 'sample'

    @classmethod
    def class_method(cls):
        print '%s, name: %s' % (cls, cls.name)

    @staticmethod
    def static_method():
        print '%s, name: %s' % (ClassSample, ClassSample.name)

    def instance_method(self):
        print '%s, name: %s' % (self, self.name)


if __name__ == '__main__':
    ClassSample.class_method()
    ClassSample.static_method()

    sample = ClassSample()
    sample.instance_method()
