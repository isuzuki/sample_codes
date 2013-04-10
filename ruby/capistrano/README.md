capistranoサンプル
==================
capistrano, pluginを使ったサンプル

### セットアップ手順 ###
1. ruby, rubygemのインストール(vagrant環境を利用しているので、最初からruby, rubygemが入っている)
2. capistranoインストール

	sudo gem install capistrano

3. pluginインストール
+	`capistrano-ext` :
	環境ごとの設定ができるようになる
+	`capistrano_color`:
	capistranoの出力をカラーにして見やすくする

	sudo gem install capistrano-ext capistrano_color

4. 雛形ファイル作成
	capfileを作成するディレクトリに移動してコマンドを実行

	capify .

