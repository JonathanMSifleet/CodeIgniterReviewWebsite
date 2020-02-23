// pure js method:
document.addEventListener("DOMContentLoaded", initialiseWebPage)

function initialiseWebPage() {

	const jumpToCommentsButton = document.getElementById("jumpToComments");
	jumpToCommentsButton.addEventListener("click", jumpToComments);

	function jumpToComments() {
		console.log("Jump to comments button pressed");
		const commentsSection = document.getElementById('commentsContainer');
		commentsSection.scrollIntoView(true);
	}

}
