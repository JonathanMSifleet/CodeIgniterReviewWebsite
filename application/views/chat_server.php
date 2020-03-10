<html>

<title>Chat server</title>

<body>

<h1>Chat server</h1>

<script>
	// connect to socket.io server:
	var io = require('socket.io');
	var socket = io.connection('http://localhost:8080');
</script>

<div class="chatSpaceContainerOuter rounded">

	<!-- display different chat rooms -->
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
		<!-- create an output for chat service -->
		<div id="chatspace">
			<!-- output goes in here -->
		</div>

		<div class="sendMessageContainer rounded" id="sendMessageContainer">
			<div id="enter">
				<!-- display message form -->
				<form id="enter">
					<input type="text" id="message" autocomplete="off" class="form-control rounded"></textarea>
					<input type="hidden" id="username" value="<?php echo $this->session->loggedInUsername; ?>">
					<input type="hidden" id="timeStamp" value="<?php echo date("d-m-Y H:i:s", time()); ?>">
					<input type="hidden" id="chatRoom" value=0>
					<input type="hidden" id="isAdmin" value="<?php
					if ($this->session->has_userdata('isAdmin')) {
						if ($this->session->isAdmin) {
							echo true;
						} else {
							echo false;
						}
					} else {
						echo false;
					}
					?>">
					<button type='submit' id='sendbutton' class="rounded">Send</button>
				</form>
				<!-- display download chat button -->
				<button id="downloadChatButton" class="rounded">Download chat</button>
			</div>
		</div>
	</div>
</div>

</body>

</html>
