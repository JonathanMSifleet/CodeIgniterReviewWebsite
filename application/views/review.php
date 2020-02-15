<html>
<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="../application/css/MyStyle.css">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<title> <?php foreach ($result as $row) { echo $review->GameName; break; } ?> </title>
</head>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
	<span class="navbar-brand">1CKW50</span>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
	        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href='<?php echo base_url(); ?>'>Home <span class="sr-only">(current)</span></a>
			</li>
		</ul>
	</div>
</nav>

<body>

<?php
// load review data:
foreach ($gameReview as $review) {
	$gameName = $review->GameName;
	$gameBlurb = $review->GameBlurb;
	$gameReview = $review->GameReview;
	$gameComments = $review->GameComments_YN;
	$gameImage = $review->ReviewImage;
	$imagePath = base_url() . "application/images/" . $gameImage;
	echo <<<_END

	<h1>$gameName</h1>
	<div class="backgroundContainer rounded" id="reviewImageContainer">
		<img src="$imagePath" alt="Poster image for $gameName" class="reviewImage rounded">
	</div>
	
	<div class="reviewData rounded">
		<div class="backgroundContainer rounded" id="gameBlurb">
			<p><i>$gameBlurb</i></p>
		</div>
		<div class="backgroundContainer rounded" id="reviewText">
			<p>$gameReview</p>
		</div>
	</div>
_END;
}
?>

</body>

</html>
