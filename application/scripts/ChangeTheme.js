//custom video controls v1
document.addEventListener("DOMContentLoaded", initialiseWebPage)

function initialiseWebPage() {

    const darkModeButton = document.getElementById("darkModeButton");
    darkModeButton.addEventListener("click", logButtonClick);


    const lightModeButton = document.getElementById("lightModeButton");
    darkModeButton.addEventListener("click", logButtonClick);


    function logButtonClick() {
        console.log("Button clicked");
    }

}