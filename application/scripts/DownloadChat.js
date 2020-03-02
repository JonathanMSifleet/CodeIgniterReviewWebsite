document.addEventListener("DOMContentLoaded", initialiseWebPage)

function initialiseWebPage() {

	// add event listener to download chat button:
	const downloadChatButton = document.getElementById("downloadChatButton");
	downloadChatButton.addEventListener("click", convertChatToArray);

	function convertChatToArray() {

		var messageTelemetry = document.getElementsByClassName("outputTelemetry");
		var messageOutput = document.getElementsByClassName("outputMessage");

		var messagesToDownload = [];

		// for each message div, store inner html as string
		for (var i = 0; i < messageTelemetry.length; i++) {
			var tempString = messageTelemetry[i].innerHTML;
			// remove all break lines
			tempString = tempString.replace("<br> ", "");
			// push string to array
			messagesToDownload.push(tempString + ": " + messageOutput[i].innerHTML);
		}

		// call download chat function
		downloadChat(messagesToDownload);
	}

	function downloadChat(messagesToDownload) {
		// convert string to JSON
		var JSONObject = JSON.stringify(messagesToDownload);

		json = [JSONObject];

		// convert json to blob
		var blob1 = new Blob(json, {type: "text/plain;charset=utf-8"});

		// download blob:
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
