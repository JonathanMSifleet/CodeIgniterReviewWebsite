<script>

	// checks if local storage item exists instead of checking if browser is chrome on every page

	// checks local storage to see if the wrong browser alert has been displayed
	if (localStorage.getItem("displayWrongBrowserAlert") === null) {
		// if the browser isn't chrome display the alert
		if (!(!!window.chrome && (!!window.chrome.webstore || !!window.chrome.runtime))) {
			window.alert("Pages may not load correctly, please use chrome for optimal experience")
			localStorage.setItem("displayWrongBrowserAlert", "false");
		} else {
			localStorage.setItem("displayWrongBrowserAlert", "false");
		}
	}

</script>

<?php
// display header
$this->load->view('templates/header', $page);
// display page
$this->load->view($bodyContent);
// display footer
$this->load->view('templates/footer');
?>
