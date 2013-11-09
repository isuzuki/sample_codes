'use strict';

var casper = require('casper').create();

casper.on('url.changed', function(url) {
	casper.echo(url);
});

casper.start('http://www.yahoo.co.jp', function() {
	// ログインクリック
	this.click('#pbhello span a');
});

casper.then(function() {
	this.evaluate(function(id, passwd) {
		document.querySelector('#username').value = id;
		document.querySelector('#passwd').value = passwd;

		// ログインボタンがID(.save)だとダメ
		document.querySelector('.btnLogin').click();
	}, 'id', 'passwd');
});

// リダイレクト後に辿り着いた画面となる
casper.then(function() {
	var text = this.evaluate(function() {
		return __utils__.getElementByXPath('//*[@id="pbhello"]').innerHTML;
	});

	casper.echo(text);
});

casper.run();
