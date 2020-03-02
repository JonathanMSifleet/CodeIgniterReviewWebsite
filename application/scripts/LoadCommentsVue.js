var app = new Vue({
	el: '#commentsSection',
	data: {
		loadedComments: []
	},
	created: function () {
		// when script is loaded run asyncLoadComments script
		this.asyncLoadComments();
	},
	methods: {
		asyncLoadComments: async function () {
			// delay script refresh by 750ms:
			const result = await this.refreshScript();
			// fetch comments:
			app.fetchComments();
			// recursively calls itself
			app.asyncLoadComments();
		},
		refreshScript: function () {
			// thread waits for 750ms
			return new Promise(resolve => {
				setTimeout(() => {
					resolve('resolved');
				}, 750);
			});
		},
		fetchComments: function () {
			var URL = window.location;
			// get JSON from get comments function in review controller
			$.getJSON(URL + "/GetComments", function (data) {
				for (var i = 0; i < data.length; i++) {
					// if comment is not already loaded display comment:
					if (!app.inArray(data[i].UID, app.loadedComments)) {
						app.displayComment(data[i]);
						app.loadedComments.push(data[i].UID);
					}
				}
			});
			// force redraw of DOM:
			this.$forceUpdate();
		},
		displayComment: function (data) {
			// add comment and telemetry to top of comment div:
			$("#commentsSection").prepend(
				"<div class='messageContainerOuter rounded'>" +
				"<div class='messageTelemetry rounded'><p class='outputTelemetry'>" +
				data.UserName + " <br> " + data.TimeStamp +
				"</p></div><div class='messageContainerInner rounded'>" +
				"<p class='outputMessage rounded'>" + data.UserComment + "</p>" +
				"</div></div></div>"
			);
		},
		// checks if element is in array
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
