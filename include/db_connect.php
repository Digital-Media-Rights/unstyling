<?php
	define("DB_SERVER", "localhost");
	define("DB_USER", "mister_admin");
	define("DB_PASS", "thank4UCK");
	define("DB_NAME", "dmr_cal");

	//Create Db connection
	$db = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	//Test connection
	if (mysqli_connect_errno()) {
		die("Database connection failed: " .
			mysqli_connect_errno() . 
			" (" . mysqli_connect_errno() . ")"
		);
	}
?>
