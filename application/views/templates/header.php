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

	<!-- my scripts -->
	<script src="<?php echo base_url() . 'application/scripts/ChangeTheme.js'; ?>"></script>
	<script src="<?php echo base_url() . 'application/scripts/JumpToComments.js'; ?>"></script>

	<!-- Vue -->
	<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
	<script src="<?php echo base_url() . 'application/scripts/LoadCommentsVue.js'; ?>"></script>

	<title><?php foreach ($gameReview as $review) {
			echo $review->GameName . " Review";
			break;
		} ?></title>
</head>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" id="navbar">
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

		<li>
			<button class="btn btn-outline-success my-2 my-sm-0" type="button" name="theme" id="changeThemeButton">Change theme</button>
		</li>

	</ul>


</nav>
