#! /usr/bin/python
# coding: utf-8

# test                                                                                                    
if __name__ == '__main__':
	import unittest
	import caesar

	class CaesarTest(unittest.TestCase):
		def test_encode(self):
			self.assertEqual(caesar.caesar_encode('abcde'), 'defgh')
			self.assertEqual(caesar.caesar_encode('aazzz'), 'ddCCC')
			self.assertEqual(caesar.caesar_encode('A.,_9'), 'Dabc,')
			self.assertEqual(caesar.caesar_encode('A;=:3'), 'D;=:6')

		def test_decode(self):                                                                            
			self.assertEqual(caesar.caesar_decode('defgh'), 'abcde')
			self.assertEqual(caesar.caesar_decode('ddCCC'), 'aazzz')
			self.assertEqual(caesar.caesar_decode('Dabc,'), 'A.,_9')
			self.assertEqual(caesar.caesar_decode('D;=:6'), 'A;=:3')

		def test_run(self):
			str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-.,_=:;'
			self.assertEqual(str, caesar.caesar_decode(caesar.caesar_encode(str)))

	unittest.main()
