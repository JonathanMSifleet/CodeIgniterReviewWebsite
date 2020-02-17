//custom video controls v1
document.addEventListener("DOMContentLoaded", initialiseWebPage)

function initialiseWebPage() {

    const changeStyleButton = document.getElementById("changeStyleButton");
    changeStyleButton.addEventListener("click", swapStyleSheet);

    function swapStyleSheet() {

        console.log("Change theme button clicked");

        var getUrl = window.location;
        var baseURL = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        if (document.getElementById("pagestyle").getAttribute("href") === baseURL + "/application/css/LightStyle.css") {
            document.getElementById("pagestyle").setAttribute("href", baseURL + "/application/css/DarkStyle.css");
        } else {
            document.getElementById("pagestyle").setAttribute("href", baseURL + "/application/css/LightStyle.css");
        }
    }
}