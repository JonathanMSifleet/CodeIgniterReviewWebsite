var app = new Vue({
	el: '#commentsSection',
	data: {
		loadedComments: []
	},
	created: function () {
		this.asyncLoadComments();
	},
	methods: {
		asyncLoadComments: async function () {
			const result = await this.waitThreeSeconds();
			app.fetchComments();
			app.asyncLoadComments();
		},
		waitThreeSeconds: function () {
			return new Promise(resolve => {
				setTimeout(() => {
					resolve('resolved');
				}, 3000);
			});
		},
		fetchComments: function () {
			var URL = window.location;
			$.getJSON(URL + "/GetComments", function (data) {
				for (var i = 0; i < data.length; i++) {
					if (!app.inArray(data[i].UID, app.loadedComments)) {
						app.displayComment(data[i]);
						app.loadedComments.push(data[i].UID);
					}
				}
			});
			this.$forceUpdate();
		},
		displayComment: function (data) {
			$("#commentsSection").prepend(
				"<div class='messageContainerOuter rounded'>" +
				"<div class='messageTelemetry rounded'><p class='outputTelemetry'>" +
				data.UserName + " <br> " + data.TimeStamp +
				"</p></div><div class='messageContainerInner rounded'>" +
				"<p class='outputMessage rounded'>" + data.UserComment + "</p>" +
				"</div></div></div>"
			);
		},
		inArray: function (needle, haystack) {
			for (var i = 0; i < haystack.length; i++) {
				if (needle == haystack[i]) {
					return true;
				}
			}
			return false;
		}
	}
});
