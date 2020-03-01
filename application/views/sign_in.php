<html>

<title>Sign in</title>

<body>

<div class="loginContainer rounded">
	<div class="loginContainerContent rounded">

		<div class="titleWrapper">
			<h2 id="containerTitleHeader" class="rounded">Sign-in</h2>
		</div>

		<form method="post" action="<?php echo base_url('SignIn/attemptSignIn'); ?>">
			<div class="form-group">
				<label id="formLabel" for="inputUsername">Username</label>
				<input type="text" name="usernameInput" class="form-control" id="inputUsername"
				       placeholder="Enter username">
			</div>
			<div class="form-group">
				<label id="formLabel" for="inputPassword">Password</label>
				<input type="password" name="passwordInput" class="form-control rounded" id="inputPassword"
				       placeholder="Enter password">
			</div>

			<?php
			if (isset($message)) {
				echo "<p>" . $message . ", please try again</p>";
			}
			?>

			<button id="loginButton" type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>

</body>

</html>
