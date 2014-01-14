# coding: UTF-8
# vim:fileencoding=utf_8

import json
import sys
from urllib import urlopen

try:
    appli_id = sys.argv[1]
except IndexError:
    sys.exit("need argument for appli id")

for page in range(1, 11):
    url = "https://itunes.apple.com/jp/rss/customerreviews/page="+ str(page) +"/id="+ appli_id +"/json"
    response = json.loads(urlopen(url).read())
    try:
        entry = response["feed"]["entry"]
        if (page == 1):
            fp = open('review.txt', 'w')

    except KeyError:
        sys.exit()

    # 0はアプリの説明なので除く
    for i in range(1, len(entry)):
        fp.write("title "+ json.dumps(entry[i]["title"]["label"], ensure_ascii=False).encode('utf-8') +"\n")
        fp.write("content "+ json.dumps(entry[i]["content"]["label"], ensure_ascii=False).encode('utf-8') +"\n")
        fp.write("rating "+ json.dumps(entry[i]["im:rating"]["label"], ensure_ascii=False).encode('utf-8') +"\n")
