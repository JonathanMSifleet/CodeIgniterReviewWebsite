// pure js method:
document.addEventListener("DOMContentLoaded", initialiseWebPage)

function initialiseWebPage() {

	var color;
	var background;

	if (localStorage.getItem("theme") === "dark") {
		color = "#00913A";
		background = "#404040";
	} else {
		color = "#4285F4";
		background = "#FFFFFF";
	}

	var selectedChatRoom = document.getElementById("chatRoom");

	var rooms = new Array();
	var roomOne = document.getElementById('roomOne');
	var roomTwo = document.getElementById('roomTwo');
	var roomThree = document.getElementById('roomThree');

	rooms.push(roomOne);
	rooms.push(roomTwo);
	rooms.push(roomThree);

	rooms[0].style.backgroundColor = color;

	rooms[0].addEventListener("click", () => {
		selectedChatRoom.value = 0;
		changeRoom(rooms, 0, color, background);
	});
	rooms[1].addEventListener("click", () => {
		selectedChatRoom.value = 1;
		changeRoom(rooms, 1, color, background);
	});
	rooms[2].addEventListener("click", () => {
		selectedChatRoom.value = 2;
		changeRoom(rooms, 2, color, background);
	});

	const changeThemeButton = document.getElementById("changeThemeButton");
	changeThemeButton.addEventListener("click", () => {
		changeTheme(rooms, selectedChatRoom.value);
	});

	function changeRoom(rooms, clicked, color, background) {

		for (var i = 0; i < rooms.length; i++) {
			rooms[i].style.backgroundColor = background;
		}
		rooms[clicked].style.backgroundColor = color;

		$("#chatspace").empty();

	}

	function changeTheme(rooms, activeRoom) {
		if (localStorage.getItem("theme") === "dark") {
			color = "#00913A";
			background = "#404040";
		} else {
			color = "#4285F4";
			background = "#FFFFFF";
		}

		for (var i = 0; i < rooms.length; i++) {
			rooms[i].style.backgroundColor = background;
		}
		rooms[activeRoom].style.backgroundColor = color;
	}

}
