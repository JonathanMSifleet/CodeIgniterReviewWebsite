// create an instance of a HTTP read Node.JS server:
var app = require("http").createServer();
//create an instance of a Socket.IO server. attach to Node.JS server
var io = require("socket.io")(app);

/* var room1 = io.connect('/room1');
var room2 = io.connect('/room2');
var room3 = io.connect('/room2'); */

//create an event handler that monitors new connections:
io.on('connection', function (socket) {
	//print a message on the terminal when a new user connects:
	console.log("Someone has connected!");

	// when we receive a message from the client:
	socket.on("client message", function (data) {

		console.log("Received message at " + data['timeStamp'] + " from: " + data['username'] + ": " + data['message']);

		// send the same message back to the client. but with a different namespace:
		io.emit("server message", data);
	});
});

// run our Node.JS/Socket io server on port 8080
app.listen(8080, function () {
	console.log("Server started")
});
