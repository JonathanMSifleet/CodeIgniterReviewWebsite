document.addEventListener("DOMContentLoaded", initialiseWebPage)

function initialiseWebPage() {

	// create event listener for jump to comments button
	const jumpToCommentsButton = document.getElementById("jumpToComments");
	jumpToCommentsButton.addEventListener("click", jumpToComments);

	function jumpToComments() {
		// scroll to comments div:
		const commentsSection = document.getElementById('commentsContainer');
		commentsSection.scrollIntoView(true);
	}

}
