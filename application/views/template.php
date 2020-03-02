<script>

	var isChrome = !!window.chrome && (!!window.chrome.webstore || !!window.chrome.runtime);

	if (localStorage.getItem("wrongBrowserMessageDisplayed") === null && !isChrome) {
		window.alert("Pages may not load correctly, please use chrome for optimal experience")
		localStorage.setItem("wrongBrowserMessageDisplayed", "true");
	}

</script>

<?php
$this->load->view('templates/header', $page);
$this->load->view($bodyContent);
$this->load->view('templates/footer');
?>
