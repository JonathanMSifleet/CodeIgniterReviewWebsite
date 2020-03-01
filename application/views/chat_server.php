<html>

<title>Chat server</title>

<body>

<h1>Chat server</h1>

<script>
	var io = require('socket.io');
	//simple connection to our socket.io server:
	var socket = io.connection('http://localhost:8080');
</script>

<!-- create an output for chat service -->
<div class="chatSpaceContainerOuter rounded">

	<div class="chatRoomContainer rounded">
		<h3 id="chatRoomTitle">Chat Rooms</h3>
	</div>

	<div class="chatSpaceContainerInner rounded">
		<div id="chatspace">
			<!-- output goes in here -->
		</div>

		<div class="sendMessageContainer rounded" id="sendMessageContainer">
			<div id="enter">
				<form id="enter">
					<input type="text" id="message" autocomplete="off">
					<input type="hidden" id="username" value="<?php echo $_SESSION['loggedInUsername']; ?>">
					<input type="hidden" id="timeStamp" value="<?php echo date("d-m-Y H:i:s", time()); ?>">
					<input type="hidden" id="isAdmin" value="<?php
					if (isset($_SESSION['isAdmin'])) {
						if ($_SESSION['isAdmin']) {
							echo true;
						} else {
							echo false;
						}
					} else {
						echo false;
					}
					?>">
					<button type='submit' id='sendbutton'>Send</button>
				</form>

				<button id="downloadChatButton">Download chat</button>
			</div>
		</div>
	</div>
</div>

</body>

</html>
