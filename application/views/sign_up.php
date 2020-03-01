<html>

<title>Sign up/title>

<body>

<div class="loginContainerOuter">
	<div class="loginContainerInner rounded">
		<div class="loginContainerContent rounded">

			<div class="titleWrapper">
				<h2 id="containerTitleHeader" class="rounded">Sign-up</h2>
			</div>

			<form method="post" action="<?php echo base_url() . 'SignUp/attemptSignUp'; ?>">
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
				if (isset($accountExists)) {
					if ($accountExists) {
						echo "<p>Username in use, please try another</p>";
					}
				}
				?>

				<button id="loginButton" type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

</body>

</html>
