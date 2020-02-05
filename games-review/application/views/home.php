<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <title><?php echo $title ?></title>
    <!-- These classes onlywork if you attach Bootstrap. -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Add your code here to create a nav bar -->
        <!-- You can use code from your previous assignment -->
    </nav>
</head>

<?php
// Manipulate the body CSS colour here.
?>

<div class="container">
    <div class="row">
		<?php
		foreach ($result as $row) {

			$reviewTitle = $row->GameName;
			$gameBlurb = $row->GameBlurb;
			$gameImage = $row->ReviewImage;
			$gameImage = base_url() . "application/images/" . $gameImage;

			echo <<<_END
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src='$gameImage' alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">$reviewTitle</h5>
                <p class="card-text">$gameBlurb</p>
                <a href="#" class="btn btn-primary" style="margin: auto;">Go to review</a>
    </div>
</div>
_END;
		}
		?>
    </div>
</div>
</body>

<!-- This section needs editing to create the chat system using HTML -->
<button id="chatButton" class="open-button btn btn-success" onclick="openForm()">Chat</button>
<div class="chat-popup pull-right" id="myForm">
    <form id="myform" class="form-container">
    </form>
</div>

<!-- Load in the required scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<!-- Don't forget to load in Vue abd socket.io -->


<!-- Load in your custom scripts -->

</html>