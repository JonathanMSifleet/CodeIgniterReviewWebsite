<html>

<title><?php foreach ($gameReview as $review) {
		echo $review->GameName . " Review";
		break;
	} ?></title>

<body>
<div id="review">

	<?php
	// load review data:
	foreach ($gameReview as $review) {
		$gameName = $review->GameName;
		$gameBlurb = $review->GameBlurb;
		$gameReview = $review->GameReview;
		$gameImage = $review->ReviewImage;
		$_SESSION['gameComments'] = $review->GameComments;
		$_SESSION['reviewID'] = $review->ID;
		$imagePath = base_url() . "application/images/" . $gameImage;
		echo <<<_END
		<div clas="reviewTitle">
			<button type="button" class="btn btn-light" id="jumpToComments">Jump to comments</button>
			<h1>$gameName</h1>	
		</div>
		
		<div class="reviewImageContainer rounded" id="reviewImageContainer">
			<img src="$imagePath" alt="Poster image for $gameName" class="reviewImage rounded">
		</div>
		
		<div class="reviewTextContainer rounded">
			<div class="textContainer rounded" id="gameBlurb">
				<p><i>$gameBlurb</i></p>
			</div>
			<div class="textContainer rounded" id="reviewText">
				<p>$gameReview</p>
			</div>
		</div>
_END;
		break;
	}
	?>

</div>

<div class="commentsContainerOuter rounded" id="commentsContainer">

	<?php

	if ($_SESSION['gameComments'] == 0) {
		echo "<h3 id='commentsDisabledMessage' class='rounded'>Comments are disabled for this review </h3>";
	} else {
		if (!isset($_SESSION['loggedIn'])) {
			echo "<p id='notLoggedIn' class='rounded'>You must be logged in to post a comment</p>";
		} elseif (isset($_SESSION['loggedIn'])) {
			if (!$_SESSION['loggedIn']) {
				echo "<p id='notLoggedIn' class='rounded'>You must be logged in to post a comment</p>";
			} else {
				$username = $_SESSION['loggedInUsername'];
				$currentURL = $_SERVER['REQUEST_URI'];
				$action = $currentURL . '/PostComment';
				$curDate = date("Y-m-d H:i:s", time());
				echo <<<_END
			<div class="postCommentContainer rounded">
			<form method="post" action="$action" id="postCommentForm">
					<div class="form-group">
						<input type="text" name="commentInput" class="form-control" id="inputComment"
						       placeholder="Enter comment">
      					<input type="hidden" name="username" id="username" value="$username">
       					<input type="hidden" name="reviewID" id="reviewID" value="{$_SESSION['reviewID']}">
       					<input type="hidden" name="currentURL" id="currentURL" value="$currentURL">
       					<input type="hidden" name="timeStamp" id="timeStamp" value="$curDate">
					</div>
					<button id="submitCommentButton" type="submit" class="btn btn-primary">Submit</button>
				</form>	
			</div>
_END;
			}
		}
		echo <<<_END
		<div class="commentsContainerInner rounded">
			<div id="commentsSection">
			
			</div>
		</div>
_END;
	}

	?>
</div>

</body>

</html>
