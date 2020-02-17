//custom video controls v1

if (localStorage.getItem("theme") === null) {
    localStorage.setItem("theme", "dark");
}

document.addEventListener("DOMContentLoaded", initialiseWebPage)

function initialiseWebPage() {

    var getUrl = window.location;
    var baseURL = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

    if (localStorage.getItem("theme") === "dark") {
        document.getElementById("pagestyle").setAttribute("href", baseURL + "/application/css/DarkStyle.css");
    } else {
        document.getElementById("pagestyle").setAttribute("href", baseURL + "/application/css/LightStyle.css");
    }

    const changeStyleButton = document.getElementById("changeStyleButton");
    changeStyleButton.addEventListener("click", swapStyleSheet);

    function swapStyleSheet() {

        console.log("Change theme button clicked");

        if (document.getElementById("pagestyle").getAttribute("href") === baseURL + "/application/css/LightStyle.css") {
            document.getElementById("pagestyle").setAttribute("href", baseURL + "/application/css/DarkStyle.css");
            localStorage.setItem("theme", "dark");
        } else {
            document.getElementById("pagestyle").setAttribute("href", baseURL + "/application/css/LightStyle.css");
            localStorage.setItem("theme", "light");
        }
    }
}