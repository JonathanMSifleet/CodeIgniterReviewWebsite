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
	<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>

	<!-- change theme script -->
	<script type="text/javascript" src="<?php echo base_url() . 'application/scripts/ChangeTheme.js'; ?>"></script>


	<title>Sign in</title>
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
				<a class="nav-link rounded" href='http://localhost:82/phpmyadmin'>PHPMyAdmin <span class="sr-only">(current)</span></a>
			</li>
		</ul>
	</div>

	<ul class="navbar-nav mr-auto">

		<?php

		if (isset($_SESSION['loggedIn'])) {
			if ($_SESSION['loggedIn']) {
				echo "<li class='nav-item active'>";
				echo "<a id='signInOutButton' class='nav-link rounded' href='" . base_url() . "/SignOut'>Sign-out <span class='sr-only'>(current)</span></a>";
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

	<button class="btn btn-outline-success my-2 my-sm-0" type="button" name="theme" id="changeStyleButton">
		Change theme
	</button>

</nav>

<body>

<div class="loginContainerOuter">
	<div class="loginContainerInner rounded">
		<div class="loginContainerContent rounded">

			<div class="titleWrapper">
				<h2 id="containerTitleHeader" class="rounded">Sign-in</h2>
			</div>

			<form method="post" action="<?php echo base_url() . 'SignIn/attemptSignIn'; ?>">
				<div class="form-group">
					<label id="formLabel" for="inputUsername">Username</label>
					<input type="text" name="usernameInput" class="form-control" id="inputUsername"
					       placeholder="Enter username">
				</div>
				<div class="form-group">
					<label id="formLabel" for="inputPassword">Password</label>
					<input type="password" name="passwordInput" class="form-control" id="inputPassword"
					       placeholder="Enter password">
				</div>

				<?php
				if (isset($loginSuccessful)) {
					if (!$loginSuccessful) {
						echo "<p>Login failed, please check username/password</p>";
					}
				}
				?>

				<button id="loginButton" type="submit" class="btn btn-primary">Submit</button>
			</form>
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
