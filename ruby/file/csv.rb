# coding: utf-8
=begin
csvファイルの読み込み
 参考URL : http://libro.tuyano.com/index3?id=1102003
=end

require 'csv'

file = 'sample.csv'
CSV.foreach(file) { |line|
  p line
}
