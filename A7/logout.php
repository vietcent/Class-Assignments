<?php
	// A7
	// logout.php
	// Summer 2015
	// Vincent Nguyen

	session_name("customer");
	session_start("customer");
	session_unset("customer");
	session_destroy();
	header('Location: login.php');
	exit;


?>
