document.addEventListener("DOMContentLoaded", function (event) {
	var app = new Vue({
		el: '#commentsSection',
		data: {
			comments: []
		},
		created: function () {
			this.getComments();
		},
		methods: {
			setComment: function (username ,isAdmin) {
				var reviewID = $("#reviewID").val();
				var timeStamp = $("#timeStamp").val();
				var comment = $("#commentInput").val();

				var commentData = {"UserName": username, "reviewID": reviewID, "TimeStamp": timeStamp, "UserComment": comment, "admin": isAdmin};

				$.post("http://localhost:82/games-review/SetComment", commentData)
					.done(function (postData) {
						app.comments.unshift(commentData);
					});
			},
			getComments: function() {
				$.get("http://localhost:82/games-review/GetComments", function(data) {
					data.forEach(element => {
						app.comments.push(element);
					});
				})
			}
		}
	})
});
