var page = require('webpage').create();
var url = 'http://www.yahoo.co.jp';
page.open(url, function(status) {
	page.includeJs('http://code.jquery.com/jquery-2.0.3.min.js', function() {
		console.log(page.evaluate(function() {
			return $('title').text();
		}));
		phantom.exit();
	});
});
