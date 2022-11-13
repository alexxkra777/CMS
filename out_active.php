<?php
	include "db.php";
	session_start();

	if (isset($_GET)) {
		session_destroy();
		header("location: index.php");
	}


?>