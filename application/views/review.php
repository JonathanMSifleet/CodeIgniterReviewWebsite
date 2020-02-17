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
    <link id= "pagestyle" rel="stylesheet" href="<?php echo base_url() . 'application/css/DarkStyle.css'; ?>">

    <script src="<?php echo base_url() . 'application/scripts/ChangeTheme.js'; ?>"></script>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>

    <title><?php foreach ($gameReview as $review) {
            echo $review->GameName;
            break;
        } ?></title>
</head>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark rounded">
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

    <div class="my-2 my-lg-0">
        <button class="btn btn-outline-success my-2 my-sm-0" type="button" id="changeStyleButton">Change theme</button>
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


<footer>
    <div class="backgroundContainer rounded" id="footerContainer">
        <!-- MMU Logo -->
        <img id="mmuLogo" src=" <?php echo base_url() . 'application/images/mmuDark.jpg'; ?>" alt="MMU Logo">
        <div class="backgroundContainer rounded" id="gitHubContainer">
            <a id="gitHubLink" href="https://github.com/JonathanMSifleet">© Jonathan Sifleet (18014017)</a>
        </div>
    </div>
</footer>

</body>

</html>
