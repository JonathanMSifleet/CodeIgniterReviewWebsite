<html>

<body>

<h1>Jonathan's Game Review Website - 1CKW50</h1>

<div class="container-fluid">
	<div class="row justify-content-center">
		<?php
		foreach ($result as $row) {

			$reviewTitle = $row->GameName;
			$gameTagline = $row->GameTagline;
			$gameImage = $row->ReviewImage;
			$gameImage = base_url() . "application/images/" . $gameImage;
			$gameSlug = $row->slug;
			$reviewURL = base_url() . "review/" . $gameSlug;
			echo <<<_END
		<div class="cardContainer rounded">
            <div class="card">
                <img class="card-img-top" src='$gameImage' alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">$reviewTitle</h5>
                    <p class="card-text">$gameTagline</p>
                </div>
                <a href=$reviewURL class="btn btn-primary" id="reviewButton">Go to review</a>
			</div>
		</div>
_END;
		}
		?>
	</div>
</div>

</body>

</html>
