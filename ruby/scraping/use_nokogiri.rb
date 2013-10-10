# coding: utf-8
=begin
wikipediaからLUNA SEAのアルバムの曲名をnokogiriを利用してスクレイピングするサンプル
 参考URL : http://qiita.com/w650/items/e663fa2430145c456c4d
=end

require 'open-uri'
require 'nokogiri'

# スクレイピングするURL
url_list = [
  'http://ja.wikipedia.org/wiki/LUNA_SEA_(アルバム)',
  'http://ja.wikipedia.org/wiki/IMAGE_(LUNA_SEAのアルバム)',
  'http://ja.wikipedia.org/wiki/EDEN_(アルバム)',
  'http://ja.wikipedia.org/wiki/MOTHER_(LUNA_SEAのアルバム)',
  'http://ja.wikipedia.org/wiki/STYLE_(LUNA_SEAのアルバム)',
  'http://ja.wikipedia.org/wiki/SINGLES_(LUNA_SEAのアルバム)',
  'http://ja.wikipedia.org/wiki/SHINE_(アルバム)',
  'http://ja.wikipedia.org/wiki/NEVER_SOLD_OUT',
  'http://ja.wikipedia.org/wiki/LUNACY',
  'http://ja.wikipedia.org/wiki/PERIOD_〜THE_BEST_SELECTION〜',
  'http://ja.wikipedia.org/wiki/Another_side_of_SINGLES_II'
]

file = File.open('music.txt', 'w')

for url in url_list
  url = URI.encode(url)

  charset = nil
  html = open(url) do |f|
    charset = f.charset
    f.read
  end

  doc = Nokogiri::HTML.parse(html, nil, charset)

  file.puts(doc.title)
  doc.xpath('//div[@id="mw-content-text"]/ol/li').each do |node|
    file.puts(node.xpath('b').text)
  end
end

file.close
