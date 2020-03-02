// pure js method:
document.addEventListener("DOMContentLoaded", initialiseWebPage)

function initialiseWebPage() {

	var active;
	var inactive;

	// set colours based upon theme
	if (localStorage.getItem("theme") === "dark") {
		active = "#00913A";
		inactive = "#404040";
	} else {
		active = "#4285F4";
		inactive = "#FFFFFF";
	}

	var selectedChatRoom = document.getElementById("chatRoom");

	var rooms = new Array();
	var roomOne = document.getElementById('roomOne');
	var roomTwo = document.getElementById('roomTwo');
	var roomThree = document.getElementById('roomThree');

	// add chat room buttons to array
	rooms.push(roomOne);
	rooms.push(roomTwo);
	rooms.push(roomThree);

	// set default room to active colour
	rooms[0].style.backgroundColor = active;

	// add event listeners for click event:
	rooms[0].addEventListener("click", () => {
		selectedChatRoom.value = 0;
		changeRoom(rooms, 0, active, inactive);
	});
	rooms[1].addEventListener("click", () => {
		selectedChatRoom.value = 1;
		changeRoom(rooms, 1, active, inactive);
	});
	rooms[2].addEventListener("click", () => {
		selectedChatRoom.value = 2;
		changeRoom(rooms, 2, active, inactive);
	});

	// add event listener to change theme button:
	const changeThemeButton = document.getElementById("changeThemeButton");
	changeThemeButton.addEventListener("click", () => {
		changeTheme(rooms, selectedChatRoom.value);
	});

	function changeRoom(rooms, clicked, active, inactive) {

		// when change all room buttons to inactive colour
		for (var i = 0; i < rooms.length; i++) {
			rooms[i].style.backgroundColor = inactive;
		}
		// set active room to active colour
		rooms[clicked].style.backgroundColor = active;

		// clear chatspace div
		$("#chatspace").empty();

	}

	function changeTheme(rooms, activeRoom) {
		// change room buttons colour based upon theme
		if (localStorage.getItem("theme") === "dark") {
			active = "#00913A";
			inactive = "#404040";
		} else {
			active = "#4285F4";
			inactive = "#FFFFFF";
		}

		// change room buttosn to appropriate colours:
		for (var i = 0; i < rooms.length; i++) {
			rooms[i].style.backgroundColor = inactive;
		}
		rooms[activeRoom].style.backgroundColor = active;
	}

}
