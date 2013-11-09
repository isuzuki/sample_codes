var page = require('webpage').create();
var url = 'http://www.yahoo.co.jp';
page.open(url, function(status) {
	page.render('yahoo.png');
	phantom.exit();
});
