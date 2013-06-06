$(function() {

	// socket.ioに接続
	var socket = io.connect('http://' + location.host + '/');

	// サーバからmessage受信時
	socket.on('message', function(data) {
		$('#list').prepend($('<div/>').text(data.text));
	});

	// messageを送信
	$('#send').click(function() {
		var text = $('#input').val();
		if (text !== '') {
			socket.emit('message', {text: text});
			$('#list').prepend($('<div/>').text(text));
			$('#input').val('');
		}
	});
});
