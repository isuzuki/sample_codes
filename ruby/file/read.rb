# coding: utf-8
=begin
ファイルの読み込みサンプル
  参考URL: http://www.namaraii.com/rubytips/?ファイルアクセス
=end

f_name = 'sample.txt'

# IO#each使用
f = open(f_name)
f.each {|line| print line}
f.close

# IO#gets使用
f = open(f_name)
while line = f.gets
  print line
end
f.close

# IO#each_line使用
f = open(f_name)
f.each_line {|line|
  print line
}
f.close
