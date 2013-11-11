'use strict';

var casper = require('casper').create();
var netsniff = require('./netsniff.js');
var resources = [];

casper.on('load.started', function() {
	this.startTime = new Date();
});

casper.on('resource.requested', function(req) {
	resources[req.id] = {
		request: req,
		startReply: null,
		endReply: null,
	};
});

casper.on('resource.received', function(res) {
	if (res.stage === 'start') {
		resources[res.id].startReply = res;

	} else if (res.stage === 'end') {
		resources[res.id].endReply = res;
	}
});

var url = 'http://www.yahoo.co.jp';
casper.start(url, function() {
	this.endTime = new Date();
	var title = this.evaluate(function() {
		return document.title;
	});

	netsniff.harInit();
	var har = netsniff.createHAR(url, title, casper.startTime, resources);
	this.echo(JSON.stringify(har, undefined, 4));

	this.exit();
});

casper.run();;
