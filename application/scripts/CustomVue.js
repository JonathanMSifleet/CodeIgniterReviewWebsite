var header = new Vue({
	// Add the id here.
	el: '#header',
	data: {
		heading: ''
	},
	created() {
		this.generateHeading()
	},
	methods: {
		generateHeading: function () {
			this.heading = ''
		},
		getReviewName: function() {
			$.get("http://localhost:82/")
		}
	}
});
