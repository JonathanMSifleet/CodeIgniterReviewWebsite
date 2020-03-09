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
			setComment: function () {

				var reviewID = $("#reviewID").val();
				var timeStamp = $("#timeStamp").val();
				var comment = $("#commentInput").val();

				var postData = {"reviewID": reviewID, "timeStamp": timeStamp, "comment": comment};

				$.post("http://localhost:82/games-review/SetComment", postData)
					.done(function (postData) {
						app.comments.unshift(postData);
					});
			},
			getComments: function() {

				$.get("http://localhost:82/games-review/GetComments", function(data) {
					console.log(data);

					data.forEach(element => {
						app.comments.push(element);
					});

				})

			}
		}
	})
});
