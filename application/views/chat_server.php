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
		<h3 id="chatRoomTitle" class="rounded">Chat Rooms</h3>

		<div class="roomButton rounded" id="roomOne">
			<p class="roomLabel">Room 1</p>
		</div>
		<div class="roomButton rounded" id="roomTwo">
			<p class="roomLabel">Room 2</p>
		</div>
		<div class="roomButton rounded" id="roomThree">
			<p class="roomLabel">Room 3</p>
		</div>
	</div>

	<div class="chatSpaceContainerInner rounded">
		<div id="chatspace">
			<!-- output goes in here -->
		</div>

		<div class="sendMessageContainer rounded" id="sendMessageContainer">
			<div id="enter">
				<form id="enter">
					<input type="text" id="message" autocomplete="off" class="form-control rounded"></textarea>
					<input type="hidden" id="username" value="<?php echo $_SESSION['loggedInUsername']; ?>">
					<input type="hidden" id="timeStamp" value="<?php echo date("d-m-Y H:i:s", time()); ?>">
					<input type="hidden" id="chatRoom" value=0>
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
