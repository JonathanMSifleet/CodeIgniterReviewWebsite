<html>
<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css">

	<!-- CSS -->
	<link id="pagestyle" rel="stylesheet" href="<?php echo base_url() . 'application/css/DarkStyle.css'; ?>">

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- change theme script -->
	<script type="text/javascript" src="<?php echo base_url() . 'application/scripts/ChangeTheme.js'; ?>"></script>

	<!-- download chat script -->
	<script type="text/javascript" src="<?php echo base_url() . 'application/scripts/DownloadChat.js'; ?>"></script>

	<!-- socket io library -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>
	<script src="<?php echo base_url() . 'application/scripts/chat.js'; ?>"></script>

	<title>Chat Server</title>
</head>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark rounded" id="navbar">
	<span class="navbar-brand">1CKW50</span>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
	        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link rounded" href='<?php echo base_url(); ?>'>Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link rounded" href='<?php echo base_url() . "ChatServer"; ?>'>Chat server <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link rounded" href='http://localhost:82/phpmyadmin'>PHPMyAdmin <span class="sr-only">(current)</span></a>
			</li>
		</ul>
	</div>

	<ul class="navbar-nav mr-auto">

		<?php

		if (isset($_SESSION['loggedIn'])) {
			if ($_SESSION['loggedIn']) {
				echo "<li class='nav-item active'>";
				echo "<a id='signInOutButton' class='nav-link rounded' href='" . base_url() . "/SignOut'>Sign-out (" . $_SESSION['loggedInUsername'] . ") <span class='sr-only'>(current)</span></a>";
				echo "</li>";
			} else {
				echo "<li class='nav-item active'>";
				echo "<a id='signInOutButton' class='nav-link rounded' href='" . base_url() . "SignUp'>Sign-up <span class='sr-only'>(current)</span></a>";
				echo "</li>";

				echo "<li class='nav-item active'>";
				echo "<a id='signInOutButton' class='nav-link rounded' href='" . base_url() . ">Sign-in <span class='sr-only'>(current)</span></a>";
				echo "</li>";
			}
		} else {
			echo "<li class='nav-item active'>";
			echo "<a id='signInOutButton' class='nav-link rounded' href='" . base_url() . "SignUp'>Sign-up <span class='sr-only'>(current)</span></a>";
			echo "</li>";

			echo "<li class='nav-item active'>";
			echo "<a id='signInOutButton' class='nav-link rounded' href='" . base_url() . "SignIn'>Sign-in <span class='sr-only'>(current)</span></a>";
			echo "</li>";
		}
		?>
	</ul>

	<button class="btn btn-outline-success my-2 my-sm-0" type="button" name="theme" id="changeThemeButton">Change theme</button>
</nav>

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


<footer class="footer rounded">
	<div class="footerContainer">
		<div class="footerContent rounded">
			<div class="footerImageContainer">
				<img id="mmuLogo" src="<?php echo base_url() . 'application/images/mmuDark.jpg'; ?>" alt="MMU Logo">
			</div>
			<div class="gitHubContainer rounded">
				<a id="gitHubLink" href="https://github.com/JonathanMSifleet">© Jonathan Sifleet (18014017)</a>
			</div>
		</div>
	</div>
</footer>

</html>
