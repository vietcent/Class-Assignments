// A2
// a2Validation.js
// Summer 2015
// Vincent Nguyen

function a3Validate() {
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

	// Floating Focus variables
	var f1, fa, f2,f3,f4,f5,f6,f7,f8 = 0;

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
		document.getElementById("password").style.backgroundColor="yellow";
		f3 = 1;
		blank = true;
		message = message +"\n   Password"

	}
	else {
		space = password.indexOf(" ");
		if (space != -1 || password.length) {

		}
	}

	if (reenter=="") {
		document.getElementById("reenter").style.backgroundColor="yellow";
		f4 = 1;
		blank = true;
		message = message + "\n   Re-enter password";

	}
	else {
		if (f3 == 0) {
			document.getElementById("reenter").style.backgroundColor="white";
		}
	}

	if (password != reenter) {
		document.getElementById("password").style.backgroundColor="red";
		document.getElementById("reenter").style.backgroundColor="red";
		document.getElementById("password").value="";
		document.getElementById("reenter").value="";
		message = message + "\n   Passwords must match!";
		blank = true;
		f3 = 1;
	}

	if (email == "") {
		blank = true;
		message = message + "\n   Email";
		document.getElementById("email").style.backgroundColor="yellow";
		f5 = 1;
		message = message + "\n   Email"

	}
	else {
		dot = email.indexOf(".");
		atSign = email.indexOf("@");
		space = email.indexOf(" ")
		if (dot == -1 || atSign == -1 || space != 1 || email.length < 6 || email.length > 5) {
			document.getElementById("email").style.backgroundColor ="red";
			document.getElementById("email").value = "";
			blank = true;
			message = message + "\n   Email: 4-15 chars, no spaces";
			f5 = 1;
		}
		else {
			document.getElementById("email").style.backgroundColor="white";
		}
	}

	if (probation[0].checked) {
		alert("Probation!");
		document.getElementById("probation").style.backgroundColor="yellow";


	}

	if (hotornot[0].checked || hotornot[1].checked) {
		document.getElementById("hotornoty").style.backgroundColor="yellow";
		document.getElementById("hotornoty").style.backgroundColor="yellow";

	}
	else {
		blank = true;
		message = message + "\n   Hot or Not";
		document.getElementById("hotornoty").style.backgroundColor="white";
		document.getElementById("hotornotn").style.backgroundColor="white";

	}

	if (smartornot[0].checked || smartornot[1].checked) {
		document.getElementById("smartornoty").style.backgroundColor="yellow";
		document.getElementById("smartornotn").style.backgroundColor="yellow";


	}
	else {
		blank = true;
		message = message + "\n Smart or Not";
		document.getElementById("smartornoty").style.backgroundColor="white";
		document.getElementById("smartornotn").style.backgroundColor="white";

	}

	if (beers == "") {
		blank = true;
		message = message + "\n   Beers";
		document.getElementById("beers").style.backgroundColor="yellow";
		f9 = 1;
		blank = true;
		message = message + "\n   Beers";

	}
	else {
		document.getElementById("beers").style.backgroundColor="white";
	}

	if (comments = "") {
		document.getElementById("comments").style.backgroundColor="yellow";
		fa = 1;
		blank = true;
		message = message + "\n   Comments";

	}
	else {
		if(comments.length < 2 || comments.length > 500)
		{
			document.getElementById("comments").style.backgroundColor="red";
			fa = 1;
			blank = true;
			message = message + "\n   Comments: between 2 and 500 characters!";
		}
		else {
			document.getElementById("comments").style.backgroundColor="white";
		}

	}

	if (blank) {
		alert(message);

		// check FFF
		if (fa ==1) {
			document.getElementById("comments").focus();

		}
		if (f9 == 1) {
			document.getElementById("beers").focus();

		}
		if (f8 ==1) {
			document.getElementById("smartornot").focus();

		}
		if (f7 ==1) {
			document.getElementById("hotornot").focus();

		}
		// if (fa ==1) {
		// 	document.getElementById("probation").focus();
		//
		// }
		if (f5 ==1) {
			document.getElementById("email").focus();

		}
		if (f4 ==1) {
			document.getElementById("reenter").focus();

		}
		if (f3 ==1) {
			document.getElementById("password").focus();

		}
		if (f2 ==1) {
			document.getElementById("username").focus();

		}
		if (f1 ==1) {
			document.getElementById("name").focus();

		}

		return false;

	}

	//We passed validation
	return true;
}
