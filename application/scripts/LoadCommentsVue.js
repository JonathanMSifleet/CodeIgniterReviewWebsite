new Vue({
	el: '#commentsSection',
	data: {},
	created: function () {
		this.loadComments();
	},
	methods: {
		loadComments: function () {

			var URL = window.location;

			$.getJSON(URL + "/GetComments", function (data) {
				console.log(data);
			});
		},
	}
});
