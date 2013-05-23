
/**
 * Module dependencies.
 */

var express = require('express')
  , routes = require('./routes')
  , http = require('http')
  , path = require('path');

var app = express();

// all environments
app.set('port', process.env.PORT || 8888);
app.set('views', __dirname + '/views');
app.set('view engine', 'ejs');
app.use(express.favicon());
app.use(express.logger('dev'));
app.use(express.bodyParser());
app.use(express.methodOverride());
app.use(app.router);
app.use(express.static(path.join(__dirname, 'public')));

// development only
if ('development' == app.get('env')) {
  app.use(express.errorHandler());
}

app.get('/', routes.index);

var server = http.createServer(app);
server.listen(app.get('port'), function(){
  console.log('Express server listening on port ' + app.get('port'));
});

// socket.io
var io = require('socket.io').listen(server);

// clientから接続時
io.sockets.on('connection', function(socket) {
	// messageイベント受信時
	socket.on('message', function(data) {
		if (data && typeof data.text === 'string') {
			// 送り主以外のクライアントにメッセージを送信
			socket.broadcast.json.emit('message', {text: data.text});
		}
	});
});
