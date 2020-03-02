// set local storage item if it doesn't exit:
if (localStorage.getItem("theme") === null) {
	localStorage.setItem("theme", "dark");
}

document.addEventListener("DOMContentLoaded", initialiseWebPage);

function initialiseWebPage() {

	// get base URL:
	var getUrl = window.location;
	var baseURL = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

	// set theme based upon local storage:
	if (localStorage.getItem("theme") === "dark") {
		document.getElementById("pagestyle").setAttribute("href", baseURL + "/application/css/DarkStyle.css");
		document.getElementById("mmuLogo").setAttribute("src", baseURL + "/application/images/mmuDark.jpg");
	} else {
		document.getElementById("pagestyle").setAttribute("href", baseURL + "/application/css/LightStyle.css");
		document.getElementById("mmuLogo").setAttribute("src", baseURL + "/application/images/mmuLight.png");
	}

	// when change theme button is clicked change theme
	const changeThemeButton = document.getElementById("changeThemeButton");
	changeThemeButton.addEventListener("click", swapStyleSheet);

	// swap style:
	function swapStyleSheet() {

		// if light theme is chosen set load dark stylesheet else load light stlyesheet
		if (document.getElementById("pagestyle").getAttribute("href") == baseURL + "/application/css/LightStyle.css") {
			document.getElementById("pagestyle").setAttribute("href", baseURL + "/application/css/DarkStyle.css");
			document.getElementById("mmuLogo").setAttribute("src", baseURL + "/application/images/mmuDark.jpg");
			localStorage.setItem("theme", "dark");
		} else {
			document.getElementById("pagestyle").setAttribute("href", baseURL + "/application/css/LightStyle.css");
			document.getElementById("mmuLogo").setAttribute("src", baseURL + "/application/images/mmuLight.png");
			localStorage.setItem("theme", "light");
		}
	}
}
