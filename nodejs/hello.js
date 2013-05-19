var http = require('http');

http.createServer(function(req, res) {
	console.log('Hello World');

	res.writeHead(200, {'Content-Type': 'text/plain'});
	res.write('Hello World');
	res.end();
}).listen(8888);

console.log('Server Runngin at http://127.0.0.1:8888/');
