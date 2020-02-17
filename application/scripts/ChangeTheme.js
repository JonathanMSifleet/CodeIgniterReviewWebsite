//custom video controls v1
document.addEventListener("DOMContentLoaded", initialiseWebPage)

function initialiseWebPage() {

    const changeStyleButton = document.getElementById("changeStyleButton");
    changeStyleButton.addEventListener("click", logButtonClick);


    function logButtonClick() {
        console.log("Button clicked");

        swapStyleSheet();

    }

    function swapStyleSheet() {
        if (document.getElementById("pagestyle").getAttribute("href") === "application/css/LightStyle.css") {
            document.getElementById("pagestyle").setAttribute("href", "application/css/DarkStyle.css");
        } else {
            document.getElementById("pagestyle").setAttribute("href", "application/css/LightStyle.css");
        }
    }
}