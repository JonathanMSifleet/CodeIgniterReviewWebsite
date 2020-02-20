$(document).ready(function () {
	// connect to the socket.IO server
	var socket = io.connect("http://localhost:8080");

	// when the form submits...
	$("form").submit(function (e) {
		e.preventDefault();
		// send a message to the server in the client message namespace
		socket.emit("client message", {
			username: $("#username").get(0).value,
			message: $("#message").get(0).value,
			timeStamp: $("#timeStamp").get(0).value
		});
		//reset the input field to blank
		$("#message").get(0).value = "";
	});

	// when we receive a message from the server...
	socket.on("server message", function (data) {
		// add the message to the output area and create a new line:
		$("#chatspace").append(
			"<div class='messageContainerOuter rounded'>" +
			"<div class='messageTelemetry rounded'><p class='chatOutput'>" +
			data['username'] + " <br> " + data['timeStamp'] +
			"</p></div>" +
			"<div class='messageContainerInner rounded' >" +
			"<p class='chatOutput'>" + data['message'] + "</p>" +
			"</div>" +
			"</div>"
		);
	});
});
