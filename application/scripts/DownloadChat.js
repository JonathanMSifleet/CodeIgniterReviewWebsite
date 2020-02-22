document.addEventListener("DOMContentLoaded", initialiseWebPage)

function initialiseWebPage() {

	const downloadChatButton = document.getElementById("downloadChatButton");
	downloadChatButton.addEventListener("click", convertChatToArray);

	function convertChatToArray() {

		var messageTelemetry = document.getElementsByClassName("outputTelemetry");
		var messageOutput = document.getElementsByClassName("outputMessage");

		var messagesToDownload = [];

		for (var i = 0; i < messageTelemetry.length; i++) {
			var tempString = messageTelemetry[i].innerHTML;
			tempString = tempString.replace("<br> ", "");
			messagesToDownload.push(tempString + ": " + messageOutput[i].innerHTML);
		}

		downloadChat(messagesToDownload);
	}

	function downloadChat(messagesToDownload) {
		var JSONObject = JSON.stringify(messagesToDownload);

		console.log("Download chat button pressed");

		json = [JSONObject];
		var blob1 = new Blob(json, {type: "text/plain;charset=utf-8"});

		var url = window.URL || window.webkitURL;
		link = url.createObjectURL(blob1);
		var a = $("<a />");
		a.attr("download", "ChatLog.json");
		a.attr("href", link);
		$("body").append(a);
		a[0].click();
		$("body").remove(a);

	}

}
