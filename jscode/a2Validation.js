// A2
// a2Validation.js
// Summer 2015
// Vincent Nguyen

function a2Validate()
{
	//variable declaration area
	//We want 1 for each HTML element that we want to check

	var name = document.getElementById("name").value;
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var email = document.getElementById("email").value;
	var probation = document.getElementsByName("probation");
	var hotornot = document.getElementsByName("hotornot");
	var smartornot = document.getElementsByName("smartornot");
	var beers = document.getElementById("beers");
	var comments = document.getElementById("comments");



	// This variable will be true when a field is blank

	var blank = false;

	//This variable will be the start of the message on-screen
	var message = "Please fill in/fix/select: ";

	//Code starts here
	//if name is left blank

	if (name =="")
	{
		blank = true;
		message = message + "\n   Name";

	}

	if (username == "") {
		blank = true;
		message = message + "\n   Username";

	}

	if (password == "") {
		blank = true;
		message = message + "\n   Password";

	}

	if (email == "") {
		blank = true;
		message = message + "\n   Email";

	}

	if (probation[0].checked) {
		alert("Probation!");


	}

	if (hotornot[0].checked || hotornot[1].checked) {

	}
	else {
		blank = true;
		message = message + "\n   Hot or Not";

	}

	if (smartornot[0].checked || smartornot[1].checked) {

	}
	else {
		blank = true;
		message = message + "\n Smart or Not";

	}

	if (beers == "") {
		blank = true;
		message = message + "\n   Beers";

	}

	if (comments = "") {
		blank = true;
		message = message + "\n   Comments";

	}

	if (blank) {
		alert(message);
		return false;

	}

	//We passed validation
	return true;
}
