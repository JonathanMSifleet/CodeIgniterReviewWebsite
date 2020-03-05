<html>

<!-- display review title from database -->
<title><?php
    foreach ($gameReview as $review) {
        echo $review->GameName . " Review";
        break;
    } ?>
</title>

<body>
<div id="review">

    <?php
    // load review data from database:
    foreach ($gameReview as $review) {
        $gameName = $review->GameName;
        $gameBlurb = $review->GameBlurb;
        $gameReview = $review->GameReview;
        $gameImage = $review->ReviewImage;
        $_SESSION['gameComments'] = $review->GameComments;
        $_SESSION['reviewID'] = $review->ID;
        $imagePath = base_url() . "application/images/" . $gameImage;

        // display jump to comments button
        echo <<<_END
		<div clas="reviewTitle">
			<button type="button" class="btn btn-light" id="jumpToComments">Jump to comments</button>
			<h1>$gameName</h1>	
		</div>
		<!-- display review poster image -->
		<div class="reviewImageContainer rounded" id="reviewImageContainer">
			<img src="$imagePath" alt="Poster image for $gameName" class="reviewImage rounded">
		</div>
		
		<div class="reviewTextContainer rounded">
			<!-- display game blurb -->
			<div class="textContainer rounded" id="gameBlurb">
				<p><i>$gameBlurb</i></p>
			</div>
			
			<!-- display game review -->
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
    <div class="commentsContainerInner rounded">
        <div id="commentsSection">
            <?php
            // if game comments are disabled hide comments div and display appropriate message
            if ($_SESSION['gameComments'] == 0) {
                echo "<h3 id='commentsDisabledMessage' class='rounded'>Comments are disabled for this review </h3>";
            } else {
                // if the user is not logged in display appropriate message
                if (!isset($_SESSION['loggedIn'])) {
                    echo "<p id='notLoggedIn' class='rounded'>You must be logged in to post a comment</p>";
                } elseif (isset($_SESSION['loggedIn'])) {
                    // if the user is not logged in display appropriate message
                    if (!$_SESSION['loggedIn']) {
                        echo "<p id='notLoggedIn' class='rounded'>You must be logged in to post a comment</p>";
                    } else {
                        $username = $_SESSION['loggedInUsername'];
                        $currentURL = $_SERVER['REQUEST_URI'];
                        $curDate = date("Y-m-d H:i:s", time());
                        // if the user is logged in display comment form
                        echo <<<_END
                <input type="text" name="commentInput" class="form-control rounded" id="commentInput"
                       placeholder="Enter comment">
                <input type="hidden" name="reviewID" id="reviewID" value="{$_SESSION['reviewID']}">
                <input type="hidden" name="timeStamp" id="timeStamp" value="$curDate">
                <button v-on:click="setComment()" id="submitCommentButton" name="submitCommentButton" class="btn btn-primary">Submit</button>
_END;
                    }
                }
            }

            ?>
        </div>
    </div>
</div>

</body>

</html>
