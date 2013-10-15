# coding: utf-8
=begin
MySQLにinsertするサンプル
 参考URL : http://d.hatena.ne.jp/tagomoris/20111210/1323502295
TODO prepared statementが使えるpluginを入れたサンプルも作ってみる
=end
require 'mysql2'

client = Mysql2::Client.new(:host => 'localhost', :username => 'root', :password => '', :database => 'live_development')

fp = open('sample.txt');
fp.each { |line|
  title = client.escape(line.chomp)
  client.query("INSERT INTO musics(`title`, `created_at`) VALUES ('#{title}', NOW())")
}
